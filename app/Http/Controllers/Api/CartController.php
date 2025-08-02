<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct(
        private CartService  $cartService,
    ) {}

    /**
     * Retrieve the current user's cart data.
     *
     * This method fetches all cart items associated with the authenticated user,
     * including related product details if implemented in the service.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request, should contain the authenticated user.
     * @return \Illuminate\Http\JsonResponse JSON response with the user's cart data.
     */
    public function getCart(Request $request)
    {
        $data  = $this->cartService->getCart($request);
        return response()->json($data, 200);
    }

    /**
     * Add a product to the user's cart.
     *
     * This method delegates the logic to the CartService to add a product to the current user's cart
     * based on the request data.
     *
     * Expected request payload:
     * - product_id: int (required)
     * - quantity: int (optional, default is 1)
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request containing product ID and quantity.
     * @return \Illuminate\Http\JsonResponse JSON response indicating the result of the operation.
     */
    public function addToCart(Request $request)
    {
        $this->cartService->addToCart($request);
        return response()->json(['message' => 'Product added to cart successfully'], 200);
    }

    /**
     * Update the quantity or details of a specific item in the user's cart.
     *
     * This method updates a cart item based on the provided ID and request data.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request containing the update data.
     * @param int $id The ID of the cart item to be updated.
     * @return \Illuminate\Http\JsonResponse JSON response indicating success.
     */
    public function updateCart(Request $request, $id)
    {
        $this->cartService->updateCart($request, $id);
        return response()->json(['message' => 'Cart updated successfully'], 200);
    }

    /**
     * Remove a product from the authenticated user's cart.
     *
     * This method deletes a specific product (by cart item ID) from the user's cart.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request.
     * @param int $id The ID of the cart item to be removed.
     * @return \Illuminate\Http\JsonResponse JSON response indicating success.
     */
    public function removeFromCart(Request $request, $id)
    {
        $this->cartService->removeFromCart($request, $id);
        return response()->json(['message' => 'Product removed from cart successfully'], 200);
    }


    /**
     * Prepare data before checkout.
     *
     * This method retrieves necessary cart information for the authenticated user
     * to review before proceeding to the checkout process. Typically includes
     * selected cart items, pricing details, and availability.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request.
     * @return \Illuminate\Http\JsonResponse JSON response containing pre-checkout data.
     */
    public function preCheckout(Request $request)
    {
        $data = $this->cartService->preCheckout($request);
        return response()->json($data);
    }
}
