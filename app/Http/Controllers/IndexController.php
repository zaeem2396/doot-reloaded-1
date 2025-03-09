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
        $data['pageTitle'] = 'Cleaning Services in Mumbai, Deep Cleaning Expert - Home Doot';
        $data['seoDescription'] = 'Discover expert Cleaning Services in Mumbai, Thane & Navi Mumbai by Home Doot. Get our reliable Cleaning Services,AC Services & Pest Control tailored to your needs.';
        $data['seoKeywords'] = 'cleaning services mumbai, koken hand sockets';
        $data['categories'] = $this->categoryService->getCategories()->getData(true);
        $data['subCategories'] = $this->subCategoryService->getSubCategories()->getData(true);
        return view('index', $data);
    }

    public function aboutUs()
    {
        $data['pageTitle'] = 'About Us';            
        $data['categories'] = $this->categoryService->getCategories()->getData(true);
        $data['subCategories'] = $this->subCategoryService->getSubCategories()->getData(true);
        return view('aboutUs', $data);
    }
}
