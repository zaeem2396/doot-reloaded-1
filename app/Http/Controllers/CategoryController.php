<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use App\Services\SubCategoryService;
use App\Utils\Response;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $data['subCatServices'] = $this->SubCategoryService->getSubCategories($catId['response']['data'][0]['id'])->getData(true);
        $data['services'] = DB::table('service')
            ->select('service.name as service_name', 'sub_category.id as sub_category_id', 'sub_category.name as sub_category_name')
            ->join('sub_category', 'service.subCatId', '=', 'sub_category.id')
            ->where('service.catId', $catId['response']['data'][0]['id'])
            ->get()
            ->groupBy('sub_category_id')
            ->map(function ($items) {
                return [
                    'sub_category_id' => $items->first()->sub_category_id,
                    'category_name' => $items->first()->sub_category_name,
                    'service' => $items->pluck('service_name')->toArray(),
                ];
            })
            ->values();
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
