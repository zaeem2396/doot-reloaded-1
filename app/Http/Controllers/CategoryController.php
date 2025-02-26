<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use App\Services\SubCategoryService;
use App\Utils\Response;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function __construct(
        private Response $response,
        private CategoryService $categoryService,
        private SubCategoryService $SubCategoryService,
        private Category $category
    ) {}

    public function index(Request $request)
    {
        $data['pageTitle'] = $request->query('name');
        $catId = $this->categoryService->getCategoryid($data['pageTitle'])->getData(true);
        $data['services'] = $this->SubCategoryService->getSubCategories($catId['response']['data'][0]['id'])->getData(true);
        return view('category', $data);
    }

    public function create(Request $request)
    {
        try {
            $inputData = $request->only('name', 'img', 'tagLine', 'seoTitle', 'seoDecription', 'seoKeywords');
            $validator = Validator::make($inputData, [
                'name' => 'required|string',
                'img' => 'nullable',
                'tagLine' => 'nullable|string',
                'seoTitle' => 'nullable|string',
                'seoDecription' => 'nullable|string',
                'seoKeywords' => 'nullable|string',
            ]);
            if ($validator->fails()) {
                return $this->response->error(['message' => $validator->errors()->first()]);
            }
            $categoryResponse = $this->categoryService->createCategory($inputData);
            return $categoryResponse;
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }

    public function get()
    {
        try {
            $categoryResponse = $this->categoryService->getCategories()->pluck('name')->toArray();
            return $categoryResponse;
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }
}
