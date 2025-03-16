<?php

namespace App\Services;

use App\Repositories\CustomerRepository;
use App\Utils\Response;
use Exception;

class CustomerService
{
    public function __construct(
        private CustomerRepository $customerRepository,
        private Response $response
    ){}

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
}