<?php

namespace App\Services;

use App\Repositories\StateRepository;
use Illuminate\Database\Eloquent\Collection;

class StateService
{
    public function __construct(
        private StateRepository $stateRepository
    ) {}

    public function all(): Collection
    {
        return $this->stateRepository->all();
    }

    public function exist(string $name): bool
    {
        return $this->stateRepository->exist($name);
    }
}