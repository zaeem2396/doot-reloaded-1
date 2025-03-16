<?php

namespace App\Repositories;

use App\Models\City;
use Illuminate\Database\Eloquent\Collection;

class CityRepository
{
    public function __construct(
        private City $city
    ) {}

    /*
    * Get all cities 
    */

    public function all(): Collection
    {
        return $this->city->all();
    }

    /*
    * Get cities based on state id 
    */

    public function findByStateId(int $stateId): Collection
    {
        return $this->city->where('state_id', $stateId)->get();
    }

    /*
    * Find a city by name 
    */

    public function exist(string $name): bool
    {
        return $this->city->where('name', $name)->exists();
    }
}
