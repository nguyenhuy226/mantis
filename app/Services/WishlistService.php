<?php

namespace App\Services;

use App\Models\Product;

class WishlistService
{
    /**
     * Retrieve the authenticated user's wishlist with pagination.
     *
     * This method fetches the wishlist products of the currently authenticated user.
     * Results are paginated with 6 items per page.
     *
     * @param \Illuminate\Http\Request $request The request instance containing query parameters
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator Paginated wishlist items
     */
    public function getWishlist($request)
    {
        $page = $request->query('page', 1);
        $customer = $request->user();
        $wishlist = $customer->wishlist()->paginate(6, ['*'], 'page', $page);
        return  $wishlist;
    }

    /**
     * Remove a product from the user's wishlist.
     *
     * This method detaches the specified product from the authenticated user's wishlist.
     * If the product is not in the wishlist, nothing happens.
     *
     * @param \Illuminate\Http\Request $request  The validated request containing product_id
     * @return void
     */
    public function removeFromWishlist($request)
    {
        $data = $request->validated();
        $customer = $request->user();
        $product = Product::findOrFail($data['product_id']);
        $customer->wishlist()->detach($product->id);
    }

    /**
     * Add a product to the user's wishlist if it does not already exist.
     *
     * This method checks if the product is already in the wishlist and
     * adds it only if it's not present.
     *
     * @param \Illuminate\Http\Request $request  The validated request containing product_id
     * @return bool True if added successfully, false if already in wishlist
     */
    public function addToWishlist($request)
    {
        $data = $request->validated();
        $customer = $request->user();
        $product = Product::findOrFail($data['product_id']);

        if ($customer->wishlist()->where('product_id', $product->id)->exists()) {
            return false;
        } else {
            $customer->wishlist()->attach($product->id);
            return true;
        }
    }
}
