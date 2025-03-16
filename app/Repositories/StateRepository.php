<?php

namespace App\Repositories;

use App\Models\State;
use Illuminate\Database\Eloquent\Collection;

class StateRepository
{
    public function __construct(
        private State $state
    ) {}

    /*
    * Get all states
    */

    public function all(): Collection
    {
        return $this->state->all();
    }

    /*
    * Find a state by name
    */

    public function exist(string $name): bool
    {
        return $this->state->where('name', $name)->exists();
    }
}

    