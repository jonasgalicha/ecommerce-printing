<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(Product $product)
    {
        $product->load('productImages');

        return view("client.order.show", compact("product"));
    }

    public function store(StoreOrderRequest $request)
    {
        $order = Order::create($request->validated() + ['user_id' => auth()->id()]);
        $product = Product::find($request->product_id);
        $total = $request->quantity * $product->price;
        $order->update(['total' => $total]);

        alert()->success("Order has been sucessfully placed");
        return redirect()->route('order.index');
    }

    public function index()
    {
        $orders = Order::with('product.productImages')->where('user_id', auth()->id())->get();

        return view('client.order.index', compact('orders'));
    }

    public function adminOrder()
    {
        $orders = Order::with('product.productImages')->get();

        return view('admin.order.index');
    }

}
