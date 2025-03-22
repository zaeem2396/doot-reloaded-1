<?php

namespace App\Http\Controllers;

use App\Helper\JwtHelper;
use Illuminate\Http\Request;
use App\Utils\Response;
use Exception;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class JwtController extends Controller
{
    public function __construct(
        private Response $response,
        private JwtHelper $jwtHelper
    ) {}

    public function verifyToken(Request $request)
    {
        try {
            $token = $request->header('Authorization');
            $isTokenValid = $this->jwtHelper->validateToken($token);
            return $isTokenValid;
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }
}
