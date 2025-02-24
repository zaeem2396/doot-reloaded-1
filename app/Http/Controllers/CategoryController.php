<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Utils\Response;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function __construct(
        private Response $response,
        private Category $category
    ) {}

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
            $categoryResponse = $this->category->createCategory($inputData);
            return $categoryResponse;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function get()
    {
        try {
            $categoryResponse = $this->category->getCategories();
            return $categoryResponse;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
