<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository
{

    public function __construct(
        private Category $category
    ) {}

    /* 
    * Create a new category
    */

    public function create(array $data): ?Category
    {
        return $this->category->create($data);
    }

    /*
    * Get all categories
    */

    public function all(): Collection
    {
        return $this->category->all();
    }

    /*
    * Find a category by id
    */

    public function exist(string $name): bool
    {
        return $this->category->where('name', $name)->exists();
    }
}
