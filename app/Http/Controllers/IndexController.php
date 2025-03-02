<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Services\SubCategoryService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct(
        private CategoryService $categoryService,
        private SubCategoryService $subCategoryService
    ) {}

    public function index()
    {
        $data['pageTitle'] = 'Homedoot';            
        $data['categories'] = $this->categoryService->getCategories()->getData(true);
        $data['subCategories'] = $this->subCategoryService->getSubCategories()->getData(true);
        return view('index', $data);
    }
}
