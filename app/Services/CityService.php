<?php

namespace App\Services;

use App\Repositories\CityRepository;
use Illuminate\Database\Eloquent\Collection;

class CityService
{
    public function __construct(
        private CityRepository $cityRepository
    ) {}

    public function all(): Collection
    {
        return $this->cityRepository->all();
    }

    public function getCityByStateId(int $stateId): Collection
    {
        return $this->cityRepository->findByStateId($stateId);
    }
}
