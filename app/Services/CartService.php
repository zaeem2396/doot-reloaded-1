<?php

namespace App\Services;

use App\Helper\JwtHelper;
use App\Repositories\CartRepository;
use App\Utils\Response;
use Exception;

class CartService
{
    public function __construct(
        private CartRepository $cartRepository,
        private JwtHelper $jwtHelper,
        private Response $response
    ) {}

    public function addToCart(array $data)
    {
        try {
            $isTokenValid = $this->jwtHelper->validateToken($data['token']);
            if (!$isTokenValid) {
                return $this->response->error(['message' => 'Invalid token']);
            }
            $userId = json_decode(json_encode($isTokenValid, true));
            $data['userId'] = $userId->original->response->user->id;
            $cartItem = $this->cartRepository->create($data);
            return $this->response->success(['data' => $cartItem]);
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }

    public function updateQuantity(array $data)
    {
        $isUpdated = $this->cartRepository->updateQuantity($data);
        return $isUpdated;
    }

    public function getCartItems(int $userId)
    {
        $cartItems = $this->cartRepository->getCartItems($userId);
        return $cartItems;
    }

    public function deleteCartItem(int $id)
    {
        $isDeleted = $this->cartRepository->deleteCartItem($id);
        return $isDeleted;
    }
}
