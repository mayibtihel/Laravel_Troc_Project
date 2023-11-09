<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use App\Models\DeliveryAgent;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orders = Order::all(); 
        // foreach ($orders as $order) {
        //     $product = Product::find($order->product_id);
        //     $order->product = $product;
        // }
        // $orders = Order::paginate(5);
        $orders = Order::with('product')->latest()->paginate(5);
        $deliveryAgents = DeliveryAgent::all();
        return view('back.order-list',  compact('deliveryAgents', 'orders'));
    }

    public function showOrderDetails(Order $order)
    {
        // Retrieve the order details, and any other required data
        // You can also load the products associated with this order if needed
        $product = $order->product;
        
        // Pass the order and product details to the Blade partial
        return view('back.order-list', ['order' => $order, 'product' => $product]);
    }
    
    public function getOrderDetails($orderId)
    {
        // Retrieve order details for the given order ID
        $order = Order::find($orderId);
        
        // Return the order details in a Blade view
        return view('back.order-details', ['order' => $order]);
    }

    public function placeOrder(Product $product, Cart $cart,Request $request)
{
    // Get the currently authenticated user
    $user = auth()->user();
    $price = $request->input('price');

    // You can create an order record in your database
    $order = new Order();
    $order->user_id = $user->id;
    $order->product_id = $product->id;
   
    $order->total_price = $price; // Save the product price
    $order->creation_date = now();
    $order->status = 'Pending'; // Set the initial status

    // Add any other necessary fields like the order date, quantity, etc.

    $order->save();
    $cart->products()->detach($product);
    // Redirect back with a success message
    return redirect()->route('cart.show')->with('success', 'Order placed successfully');
}


public function changeStatus($id, $status)
{
    $order = Order::find($id);

    if ($order) {
        $order->status = $status;
        $order->save();
    }

    return redirect()->back();
}


public function deleteOrderByAdmin(Order $order)
{
    // Check if the order exists
    if (!$order) {
        return redirect()->route('admin/order-list')->with('error', 'Order not found.');
    }

    // Delete the order
    $order->delete();

    return redirect()->route('admin/order-list')->with('success', 'Order deleted successfully.');
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
