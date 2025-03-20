<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Services\SubCategoryService;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function __construct(
        private CategoryService $categoryService,
        private SubCategoryService $subCategoryService
    ) {}

    public function homeCleaningServiceInNaviMumbai()
    {
        $data['pageTitle'] = 'Home Cleaning Services in Navi Mumbai - Home Doot';
        $data['seoDescription'] = 'Transform your home with top-notch cleaning services in Navi Mumbai. From deep cleaning to specialized treatments, experience spotless spaces at great prices';
        $data['seoKeywords'] = 'Home Cleaning Services in Navi Mumbai';
        $data['h1'] = 'Affordable Home Cleaning Services in Navi Mumbai';
        $data['categories'] = $this->categoryService->getCategories()->getData(true);
        $data['subCategories'] = $this->subCategoryService->getSubCategories()->getData(true);
        return view('homeCleaningServiceInNaviMumbai', $data);
    }

    public function homeCleaningServiceInThane()
    {
        $data['pageTitle'] = 'Home Cleaning Services in Thane, Deep & Reliable - Home Doot';
        $data['seoDescription'] = 'Discover top-rated home cleaning services in Thane. Professional Home deep cleaning services for spotless homes using eco-friendly methods. Trusted & hygienic!';
        $data['seoKeywords'] = 'home cleaning services in thane, best home cleaning services in thane';
        $data['h1'] = 'Best Home Cleaning Services in Thane';
        $data['categories'] = $this->categoryService->getCategories()->getData(true);
        $data['subCategories'] = $this->subCategoryService->getSubCategories()->getData(true);
        return view('homeCleaningServiceInThane', $data);
    }
}
