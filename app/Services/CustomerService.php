<?php

namespace App\Services;

use App\Repositories\CustomerRepository;
use App\Utils\Response;
use Exception;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class CustomerService
{
    public function __construct(
        private CustomerRepository $customerRepository,
        private Response $response
    ) {}

    public function registerUser(array $inputData)
    {
        try {
            $isCustomerExist = $this->customerRepository->customerExists($inputData['email'], $inputData['mobile']);
            if ($isCustomerExist) {
                return $this->response->duplicate(['message' => 'Customer already exist']);
            }
            $isCustomerCreated = $this->customerRepository->create($inputData);
            if ($isCustomerCreated) {
                return $this->response->success(['message' => 'Customer created successfully']);
            }
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }

    public function loginUser(array $inputData)
    {
        try {
            $isCustomerExist = $this->customerRepository->findCustomerByMobile($inputData['mobile']);
            if (!$isCustomerExist) {
                return $this->response->error(['message' => 'Customer not found']);
            }
            $token = JWTAuth::attempt($inputData);
            if (!$token) {
                return $this->response->error(['message' => 'Invalid credentials']);
            }
            $response = [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => JWTAuth::factory()->getTTL() * getAppSettings()['original']['response']['data']['jwtTokenExpiry'],
            ];
            return $this->response->success($response);
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }
}
