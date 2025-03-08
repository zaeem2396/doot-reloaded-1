<?php

namespace App\Services;

use App\Repositories\SubCategoryRepository;
use App\Utils\Response;
use Exception;
use Illuminate\Support\Facades\DB;

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

    public function getSubCategories($catId = null)
    {
        try {
            if (isset($catId)) {
                $subCategories = $this->subCategoryRepository->findByCatId($catId);
                return $this->response->success(['data' => $subCategories]);
            }
            $subCategories = $this->subCategoryRepository->all();
            return $this->response->success(['data' => $subCategories]);
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }

    public function getSubCategoryid($name)
    {
        try {
            $subCategory = $this->subCategoryRepository->getSubCategoryid($name);
            return $this->response->success(['data' => $subCategory]);
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }

    public function getServicesGroupedBySubCategory($categoryId)
    {
        try {
            return DB::table('service')
                ->select(
                    'service.name as service_name',
                    'service.id as service_id',
                    'service.catId as catId',
                    'sub_category.id as sub_category_id',
                    'sub_category.name as sub_category_name'
                )
                ->join('sub_category', 'service.subCatId', '=', 'sub_category.id')
                ->where('service.subCatId', $categoryId)
                ->orderBy('sub_category.id') // Ensure consistent grouping
                ->get()
                ->groupBy('sub_category_id')
                ->map(fn($items) => [
                    'category_id' => $items[0]->catId,
                    'sub_category_id' => $items[0]->sub_category_id, // Access first item directly
                    'category_name' => $items[0]->sub_category_name,
                    'service' => $items->map(fn($item) => [
                        'service_id' => $item->service_id,
                        'service_name' => $item->service_name
                    ])->values()->all(),
                ])
                ->values();
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }
}
