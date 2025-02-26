<?php

namespace App\Services;

use App\Repositories\SubCategoryRepository;
use App\Utils\Response;
use Exception;

class SubCategoryService
{
    public function __construct(
        private SubCategoryRepository $subCategoryRepository,
        private Response $response
    ) {}

    public function createSubCategory(array $inputData)
    {
        try {
            $inputData['name'] = str_replace(' ', '-', strtolower($inputData['name']));
            $isSubCategoryExist = $this->subCategoryRepository->exist($inputData['name']);
            if ($isSubCategoryExist) {
                return $this->response->duplicate(['message' => 'Sub Category already exist']);
            }
            $isSubCategoryCreated = $this->subCategoryRepository->create($inputData);
            if ($isSubCategoryCreated) {
                return $this->response->success(['message' => 'Sub Category created successfully']);
            }
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }

    public function getSubCategories($catId)
    {
        try {
            $subCategories = $this->subCategoryRepository->findByCatId($catId);
            return $this->response->success(['data' => $subCategories]);
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }
}
