<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Services\CustomerService;
use App\Services\SubCategoryService;
use App\Utils\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPOpenSourceSaver\JWTAuth\Claims\Custom;
use App\Services\StateService;

class AuthController extends Controller
{
    public function __construct(
        private Response $response,
        private CategoryService $categoryService,
        private SubCategoryService $subCategoryService,
        private CustomerService $customerService,
        private StateService $stateService
    ) {}

    public function login()
    {
        $data['categories'] = $this->categoryService->getCategories()->getData(true);
        $data['subCategories'] = $this->subCategoryService->getSubCategories()->getData(true);
        return view('login', $data);
    }

    public function register()
    {
        $data['pageTitle'] = 'Register';
        $data['state'] = $this->stateService->all();
        $data['categories'] = $this->categoryService->getCategories()->getData(true);
        $data['subCategories'] = $this->subCategoryService->getSubCategories()->getData(true);
        return view('register', $data);
    }

    public function registerUser(Request $request)
    {
        try {
            $inputData = $request->only('name', 'email', 'mobile', 'address', 'state', 'city', 'pincode', 'password');

            $validator = Validator::make($inputData, [
                'name' => 'required',
                'email' => 'required|email',
                'mobile' => 'required',
                'address' => 'required',
                'state' => 'required',
                'city' => 'required',
                'pincode' => 'required',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->response->error(['message' => $validator->errors()->first()]);
            }
            $response = $this->customerService->registerUser($inputData);
            return $response;
        } catch (\Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }
}
