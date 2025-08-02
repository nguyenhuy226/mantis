<?php

namespace App\Services;

use App\Models\Product;

class CartService
{

    /**
     * Retrieve all cart items of the authenticated customer with product details.
     *
     * Calculates the subtotal (total price of all items) and total quantity of items in the cart.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request from the customer.
     *
     * @return array{
     *     cart: \Illuminate\Database\Eloquent\Collection,
     *     subtotal: float|int,
     *     quantityTotal: int
     * }
     */
    public function getCart($request)
    {
        $customer = $request->user();
        $cartItems = $customer->carts()->with('product')->get();

        $subtotal = $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->product->price;
        });
        $quantityTotal = $cartItems->sum('quantity');
        return [
            'cart' => $cartItems,
            'subtotal' => $subtotal,
            'quantityTotal' => $quantityTotal,
        ];
    }


    /**
     * Add one or multiple products to the authenticated customer's cart.
     *
     * If the product already exists in the cart, its quantity is incremented by 1.
     * If not, a new cart item is created with quantity 1.
     * Supports adding a single product ID or an array of product IDs.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request containing 'product_id' (int or array).
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException If the request data is invalid.
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException If any product ID is not found.
     */
    public function addToCart($request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required'
        ]);
        $customer = $request->user();
        if (is_array($validatedData['product_id'])) {
            $products = Product::whereIn('id', $validatedData['product_id'])->get();
            foreach ($products as $product) {
                $cartItem = $customer->carts()->where('product_id', $product->id)->first();
                if ($cartItem) {
                    $cartItem->quantity += 1;
                    $cartItem->save();
                } else {
                    $customer->carts()->create([
                        'product_id' => $product->id,
                        'quantity' => 1,
                    ]);
                }
            }
        } else {
            $product = Product::findOrFail($validatedData['product_id']);

            $cartItem = $customer->carts()->where('product_id', $product->id)->first();
            if ($cartItem) {
                $cartItem->quantity += 1;
                $cartItem->save();
            } else {
                $customer->carts()->create([
                    'product_id' => $product->id,
                    'quantity' => 1,
                ]);
            }
        }
    }

    /**
     * Update the quantity of a specific cart item for the authenticated customer.
     *
     * Validates the quantity from the request and updates the corresponding
     * cart item's quantity. Throws a 404 error if the cart item is not found.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request.
     * @param int $id The ID of the cart item to update.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException If validation fails.
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException If the cart item is not found.
     */
    public function updateCart($request, $id)
    {
        $validatedData = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);
        $customer = $request->user();
        $cartItem = $customer->carts()->findOrFail($id);
        $cartItem->update(['quantity' => $validatedData['quantity']]);
    }


    /**
     * Remove a specific item from the authenticated customer's cart.
     *
     * Finds the cart item by its ID from the authenticated user's cart
     * and deletes it. If the item does not exist, a 404 exception is thrown.
     *
     * @param \Illuminate\Http\Request $request The HTTP request containing the authenticated user.
     * @param int $id The ID of the cart item to be removed.
     *
     * @return void
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException If the cart item does not exist.
     */
    public function removeFromCart($request, $id)
    {
        $customer = $request->user();
        $cartItem = $customer->carts()->findOrFail($id);

        $cartItem->delete();
    }


    /**
     * Prepare the cart data for the pre-checkout step.
     *
     * This method receives a list of cart item IDs from the request, retrieves the corresponding
     * items from the authenticated user's cart, calculates the total price and quantity, and
     * returns the data for review before proceeding to checkout.
     *
     * @param \Illuminate\Http\Request $request The HTTP request containing the list of cart item IDs in the 'data' field.
     *
     * @return array{
     *     items: \Illuminate\Support\Collection<int, \App\Models\Cart>,
     *     total: float,
     *     quantityTotal: int
     * }
     *
     * @throws \Illuminate\Validation\ValidationException If the request data is invalid.
     */
    public function preCheckout($request)
    {
        $validatedData = $request->validate([
            'data' => ' array',
        ]);
        if (empty($validatedData['data'])) {
            return [
                'items' => [],
                'total' => 0,
                'quantityTotal' => 0,
            ];
        }
        $customer = $request->user();

        $cartItems = $customer->carts()
            ->whereIn('id', $validatedData['data'])
            ->with('product')
            ->get();

        if ($cartItems->isEmpty()) {
            return [
                'items' => [],
                'total' => 0,
                'quantityTotal' => 0,
            ];
        }

        $total = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });

        $quantityTotal = $cartItems->sum('quantity');

        return [
            'items' => $cartItems,
            'total' => $total,
            'quantityTotal' => $quantityTotal,
        ];
    }
}
