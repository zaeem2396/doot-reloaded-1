<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use App\Utils\Response;
use Exception;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct(
        private Response $response,
        private CartService $cartService
    ) {}

    public function add(Request $request)
    {
        try {
            $inputData = $request->only('catId', 'subCatId', 'serviceId', 'optionId', 'serviceOptionId', 'quantity');
            $inputData['token'] = $request->header('Authorization');
            $cart = $this->cartService->addToCart($inputData);
            return $cart;
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }
}
