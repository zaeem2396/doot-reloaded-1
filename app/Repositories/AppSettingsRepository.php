<?php

namespace App\Repositories;

use App\Models\AppSettings;
use Illuminate\Database\Eloquent\Collection;

class AppSettingsRepository
{
    public function __construct(
        private AppSettings $appSettings
    ) {}

    /*
    * Create a new app settings 
    */

    public function create(array $data): ?AppSettings
    {
        return $this->appSettings->create($data);
    }

    /*
    * Get all app settings
    */

    public function all(): Collection
    {
        return $this->appSettings->all();
    }

    /*
    * Find a app settings by name
    */

    public function exist(string $name): bool
    {
        return $this->appSettings->where('name', $name)->exists();
    }
}
