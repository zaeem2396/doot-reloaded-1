<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use App\Utils\Response;
use Exception;

class CategoryService
{
    public function __construct(
        private CategoryRepository $categoryRepository,
        private Response $response
    ) {}

    public function createCategory(array $inputData)
    {
        try {
            $inputData['name'] = str_replace(' ', '-', strtolower($inputData['name']));
            $isCategoryExist = $this->categoryRepository->exist($inputData['name']);
            if ($isCategoryExist) {
                return $this->response->duplicate(['message' => 'Category already exist']);
            }
            $isCategoryCreated = $this->categoryRepository->create($inputData);
            if ($isCategoryCreated) {
                return $this->response->success(['message' => 'Category created successfully']);
            }
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }

    public function getCategories()
    {
        try {
            $categories = $this->categoryRepository->all();
            return $this->response->success(['data' => $categories]);
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }

    public function getCategoryid($name)
    {
        try {
            $category = $this->categoryRepository->getCategoryid($name);
            return $this->response->success(['data' => $category]);
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }
}
