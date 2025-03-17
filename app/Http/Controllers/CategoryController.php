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
        private SubCategoryService $subCategoryService,
        private Category $category
    ) {}

    public function index(Request $request)
    {
        // $data['pageTitle'] = ucfirst(str_replace('-', ' ', $request->segment(2)));
        $data['catId'] = $this->subCategoryService->getSubCategoryid($request->segment(2))->getData(true);
        $data['pageTitle'] = $data['catId']['response']['data'][0]['seo_title'];
        $data['seoDescription'] = $data['catId']['response']['data'][0]['seo_description'];
        $data['seoKeywords'] = $data['catId']['response']['data'][0]['seo_keywords'];
        $data['subCategories'] = $this->subCategoryService->getSubCategories()->getData(true);
        $data['services'] = $this->subCategoryService->getServicesGroupedBySubCategory($data['catId']['response']['data'][0]['id']);
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
