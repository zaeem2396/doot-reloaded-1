<?php

namespace App\Helper;

use App\Utils\Response;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class JwtHelper
{

    public function __construct(
        private Response $response,
    ) {}

    public function validateToken(String $token)
    {
        try {
            // Check if token is missing
            if (!$token) {
                return $this->response->error(['error' => 'Unauthorized or token not provided']);
            }

            // Remove 'Bearer ' prefix if present
            if (str_starts_with($token, 'Bearer ')) {
                $token = substr($token, 7);
            }
            $user = JWTAuth::setToken(str_replace('"', '', trim($token)))->authenticate();

            if (!$user) {
                return $this->response->error(['message' => 'Invalid token']);
            }

            return $this->response->success(['user' => $user]);
        } catch (TokenExpiredException $e) {
            return $this->response->error(['message' => 'Token has expired']);
        } catch (TokenInvalidException $e) {
            return $this->response->error(['message' => 'Invalid token']);
        } catch (JWTException $e) {
            return $this->response->error(['message' => 'Token processing error: ' . $e->getMessage()]);
        }
    }
}
