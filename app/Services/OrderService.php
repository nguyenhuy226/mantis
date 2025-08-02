<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrderService
{
    /**
     * Retrieve a paginated list of orders for the authenticated customer.
     *
     * Includes related order details and product information, as well as the associated address.
     * Orders are sorted by creation date in descending order.
     *
     * @param \Illuminate\Http\Request $request The HTTP request containing query parameters
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator Paginated list of customer orders
     */
    public function getOrder($request)
    {
        $page = $request->query('page', 1);
        $customer = $request->user();
        $orders = Order::with(['orderDetail.product', 'address'])
            ->where('customer_id', $customer->id)
            ->orderBy('created_at', 'desc')
            ->paginate(6, ['*'], 'page', $page);

        return  $orders;
    }

    /**
     * Process checkout for the authenticated customer.
     *
     * This function creates a new order based on the customer's selected cart items.
     * It calculates the total price, verifies product availability, creates the order and order details,
     * and clears the purchased items from the cart.
     *
     * @param \Illuminate\Http\Request $request The validated checkout request containing:
     *        - address_id: ID of the selected delivery address
     *        - method: Payment method ('COD', 'QR', 'VISA')
     *        - data: Array of cart item IDs
     * @return array|string Returns an array with order summary on success,
     *                      or a string error identifier ('cartEmpty' or 'productNoFound')
     */
    public function checkout($request)
    {
        $data = $request->validated();
        $customer = $request->user();
        DB::beginTransaction();
        $totalPrice = 0;
        $cartItems = $customer->carts()
            ->whereIn('id', $data['data'])
            ->with('product')
            ->get();
        if ($cartItems->isEmpty()) {
            return "cartEmpty";
        }

        foreach ($cartItems as $item) {
            if (!$item->product) {
                return "productNoFound";
            }

            $totalPrice += $item->product->price * $item->quantity;
        }
        $order = Order::create([
            'customer_id' => $customer->id,
            'code' => 'ORD-' . strtoupper(uniqid()),
            'total_price' => $totalPrice,
            'status' => 'pending',
            'address_id' => $data['address_id'],
            'payment_method' => $data['method'],
        ]);

        foreach ($cartItems as $item) {
            $product = Product::findOrFail($item['product_id']);
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $item['quantity'],
                'price' => $product->price,
            ]);
        }
        $customer->carts()
            ->whereIn('product_id', $cartItems->pluck('product_id'))
            ->delete();

        DB::commit();
        return [
            'message' => 'Đặt hàng thành công',
            'order_code' => $order->code,
            'total_price' => $order->total_price,
            "method" => $data['method'],
            "address" => $data['address_id']
        ];
    }
}
