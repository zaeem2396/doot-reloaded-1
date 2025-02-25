<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Utils\Response;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function __construct(
        private Response $response,
        private CategoryService $categoryService
    ) {}

    public function index(Request $request)
    {
        return view('category');
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
