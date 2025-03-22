<?php

namespace App\Helpers;

use App\Utils\Response;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class JwtHelper
{
    public function __construct(
        private Response $response
    ) {}

    /**
     * Validate a JWT token and return the user or error response.
     *
     * @param string|null $token
     * @return array
     */

    public function validateToken(?string $token)
    {
        try {
            if (!$token) {
                return $this->response->error(['message' => 'Token not provided']);
            }
            $isTokenValid = JWTAuth::setToken($token)->authenticate();
            if (!$isTokenValid) {
                return $this->response->error(['message' => 'Invalid token']);
            }
            return $this->response->success(['user' => $isTokenValid]);
        } catch (JWTException $e) {
            return $this->response->error(['message' => 'Invalid token: ' . $e->getMessage()]);
        }
    }
}
