<?php

namespace App\Repositories;

use App\Models\Options;
use Illuminate\Database\Eloquent\Collection;

class OptionServiceRepository
{
    public function __construct(
        private Options $options
    ) {}

    /*
    * Create a new option 
    */

    public function create(array $data): ?Options
    {
        return $this->options->create($data);
    }

    /*
    * Get all options
    */
    public function all(): Collection
    {
        return $this->options->all();
    }

    /*
    * Find a option by id
    */

    public function find(int $id): ?Options
    {
        return $this->options->find($id);
    }

    /*
    * Find a option by name 
    */

    public function exist(string $name): bool
    {
        return $this->options->where('name', $name)->exists();
    }

    /*
    * Find a option by category id, sub category id and service id
    */

    public function getOptionsOnCatIdSubCatIdServiceId(array $inputData)
    {
        return $this->options->where('catId', $inputData['catId'])
            ->where('subCatId', $inputData['subCatId'])
            ->where('serviceId', $inputData['serviceId'])
            ->get();
    }
}
