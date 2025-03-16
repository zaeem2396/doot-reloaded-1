<?php

namespace App\Repositories;

use App\Models\User;

class CustomerRepository
{
    public function __construct(
        private User $user
    ) {}

    /*
    * Check if customer exists based on email or mobile 
    */

    public function customerExists(string $email, string $mobile): bool
    {
        return $this->user->where('email', $email)->orWhere('mobile', $mobile)->exists();
    }

    /*
    * Create a new customer 
    */

    public function create(array $data): ?User
    {
        return $this->user->create($data);
    }

    /*
    * Get customers data based on id
    */

    public function getCustomerById(int $id): ?User
    {
        return $this->user->find($id);
    }

    /*
    * Update customer data based on id 
    */

    public function updateCustomerById(int $id, array $data): bool
    {
        return $this->user->where('id', $id)->update($data);
    }
}