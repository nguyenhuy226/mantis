<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest\CheckoutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\OrderService;

class OrderController extends Controller
{
    public function __construct(
        private OrderService  $orderService,
    ) {}

    /**
     * Display a list of orders.
     *
     * Retrieves orders based on the request's query parameters
     * and returns them as a JSON response.
     *
     * @param \Illuminate\Http\Request $request The incoming request with optional filters or pagination
     * @return \Illuminate\Http\JsonResponse The response containing the list of orders
     */
    public function index(Request $request)
    {
        $orders = $this->orderService->getOrder($request);
        return response()->json([
            'message' => 'Danh sách đơn hàng',
            'data' => $orders
        ]);
    }

    /**
     * Handle the checkout process for the authenticated customer.
     *
     * Delegates business logic to the OrderService.
     *
     * If any error occurs, the transaction is rolled back.
     *
     * @param \App\Http\Requests\CheckoutRequest $request The validated checkout request
     * @return \Illuminate\Http\JsonResponse The response containing order info or error message
     */
    public function checkout(CheckoutRequest $request)
    {
        //     $validated = $request->validate([
        //         'address_id' => 'required|exists:addresses,id',
        //         'method' => 'required|in:COD,QR,VISA',
        //         'data' => 'required|array|min:1',
        //         'note' => 'nullable'
        //     ]);

        //     $customer = $request->user();

        //     DB::beginTransaction();
        //     try {
        //         $totalPrice = 0;
        //         $cartItems = $customer->carts()
        //             ->whereIn('id', $validated['data'])
        //             ->with('product')
        //             ->get();
        //         if ($cartItems->isEmpty()) {
        //             return response()->json([
        //                 'message' => 'Không tìm thấy sản phẩm trong giỏ hàng',
        //             ], 400);
        //         }
        //         // foreach ($cartItems  as $item) {
        //         //     $product = Product::findOrFail($item['product_id']);
        //         //     $totalPrice += $product->price * $item['quantity'];
        //         // }
        //         foreach ($cartItems as $item) {
        //             if (!$item->product) {
        //                 return response()->json(['message' => 'Sản phẩm không tồn tại'], 400);
        //             }

        //             $totalPrice += $item->product->price * $item->quantity;
        //         }
        //         $order = Order::create([
        //             'customer_id' => $customer->id,
        //             'code' => 'ORD-' . strtoupper(uniqid()),
        //             'total_price' => $totalPrice,
        //             'status' => 'pending',
        //             'address_id' => $validated['address_id'],
        //             'payment_method' => $validated['method'],
        //         ]);

        //         foreach ($cartItems as $item) {
        //             $product = Product::findOrFail($item['product_id']);
        //             OrderDetail::create([
        //                 'order_id' => $order->id,
        //                 'product_id' => $product->id,
        //                 'quantity' => $item['quantity'],
        //                 'price' => $product->price,
        //             ]);
        //         }
        //         $customer->carts()
        //             ->whereIn('product_id', $cartItems->pluck('product_id'))
        //             ->delete();

        //         DB::commit();

        //         return response()->json([
        //             'message' => 'Đặt hàng thành công',
        //             'order_code' => $order->code,
        //             'total_price' => $order->total_price,
        //             "method" => $validated['method'],
        //             "address" => $validated['address_id']
        //         ]);
        //     } catch (\Exception $e) {
        //         DB::rollBack();
        //         return response()->json([
        //             'message' => 'Đặt hàng thất bại',
        //             'error' => $e->getMessage()
        //         ], 500);
        //     }
        // }

        DB::beginTransaction();
        try {
            $order = $this->orderService->checkout($request);
            return response()->json($order);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Đặt hàng thất bại',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
