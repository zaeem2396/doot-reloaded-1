<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct(
        private CategoryService $categoryService
    ) {}

    public function index()
    {
        $data['categories'] = $this->categoryService->getCategories()->getData(true);
        return view('index', $data);
    }
}
