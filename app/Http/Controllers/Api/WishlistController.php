<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\WishlistRequest\RemoveWishlistRequest;
use App\Services\WishlistService;
use Illuminate\Http\Request;


class WishlistController extends Controller
{
    public function __construct(
        private WishlistService  $wishlistService,
    ) {}

    /**
     * Add a product to the user's wishlist.
     *
     * This method uses the WishlistService to add the product.
     * If the product is already in the wishlist, it returns an error response.
     *
     * @param \App\Http\Requests\RemoveWishlistRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addToWishlist(RemoveWishlistRequest $request)
    {
        $result = $this->wishlistService->addToWishlist($request);
        if ($result) {
            return response()->json(['message' => 'Product added to wishlist'], 200);
        } else {
            return response()->json(['message' => 'Product is already in wishlist'], 400);
        }
    }

    /**
     * Remove a product from the user's wishlist.
     *
     * This method delegates the removal logic to the WishlistService
     * and returns a JSON response indicating success.
     *
     * @param \App\Http\Requests\RemoveWishlistRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function removeFromWishlist(RemoveWishlistRequest $request)
    {
        $this->wishlistService->removeFromWishlist($request);
        return response()->json(['message' => 'Product removed from wishlist'], 200);
    }

    /**
     * Get the wishlist of the current user.
     *
     * This method fetches the wishlist data through the WishlistService
     * and returns it as a JSON response.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getWishlist(Request $request)
    {
        $wishlist  = $this->wishlistService->getWishlist($request);
        return response()->json($wishlist, 200);
    }
}
