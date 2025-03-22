<?php

namespace App\Repositories;

use App\Models\Cart;

class CartRepository
{
    public function __construct(
        private Cart $cart
    ) {}

    /*
    * Create a new cart 
    */

    public function create(array $data): ?Cart
    {
        return $this->cart->create($data);
    }

    /*
    * Update quantity if cart item exists
    */

    public function updateQuantity(array $data): bool
    {
        return $this->cart->where('id', $data['id'])->update(['quantity' => $data['quantity']]);
    }

    /*
    * Get cart items based on user id
    */

    public function getCartItems(int $userId): array
    {
        return $this->cart->where('user_id', $userId)->get()->toArray();
    }

    /*
    * Delete cart item based on id
    */

    public function deleteCartItem(int $id): bool
    {
        return $this->cart->where('id', $id)->delete();
    }
}
