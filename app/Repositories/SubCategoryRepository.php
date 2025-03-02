<?php

namespace App\Repositories;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Collection;

class SubCategoryRepository
{
    public function __construct(
        private SubCategory $subCategory
    ) {}

    /*
    * Create a new sub category 
    */

    public function create(array $data): ?SubCategory
    {
        return $this->subCategory->create($data);
    }

    /*
    * Get all sub categories
    */

    public function all(): Collection
    {
        return $this->subCategory->all();
    }

    /*
    * Find a sub category by name
    */

    public function exist(string $name): bool
    {
        return $this->subCategory->where('name', $name)->exists();
    }

    /*
    * Find a sub category by category id
    */

    public function findByCatId(int $catId): Collection
    {
        return $this->subCategory->where('catId', $catId)->get();
    }

    /*
    * Find a sub category ID by name
    */

    public function getSubCategoryid(string $name)
    {
        return $this->subCategory->where('name', $name)->get();
    }
}
