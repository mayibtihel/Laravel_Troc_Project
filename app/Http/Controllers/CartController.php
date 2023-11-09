<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
 
    
    public function showCart()
{
    // Retrieve the authenticated user
    $user = auth()->user();

    // Find the cart associated with the authenticated user
    $cart = Cart::where('user_id', $user->id)->first();

    if (!$cart) {
        // If there's no cart associated with the user, you can handle it here (e.g., displaying an empty cart message).
        return view('front.cart', ['cart' => null, 'products' => [], 'cartItemCount' => 0]);
    }

    // Retrieve the products associated with the cart
    $products = $cart->products;

    // Calculate the cart item count
    $cartItemCount = $cart->count();

    return view('front.cart', compact('cart', 'products', 'cartItemCount'));
}

    
    // public function showCart()
    // {
    //     // Retrieve the cart associated with the current session or user, or create a new one if it doesn't exist
    //     $cart = Cart::findOrNew(session('cart_id'));
    //     // Retrieve the products associated with the cart
    //     $products = $cart->products;
    //     $cartItemCount = $cart->count();
    //     return view('front.cart', compact('cart', 'products','cartItemCount'));
    // }
    
    // public function addProduct(Product $product)
    // {
    //     $cartId = session('cart_id');
    
    //     if (!$cartId || !Cart::find($cartId)) {
    //         // If cart_id doesn't exist in the session, create a new cart and store the ID in the session
    //         $cart = new Cart();
    //         // Optionally, assign the user ID if your cart is associated with a user
    //         // $cart->user_id = auth()->user()->id;
    //         $cart->save();
    
    //         // Store the new cart ID in the session
    //         session(['cart_id' => $cart->id]);
    //     }
    
    //     // Now, you should have a cart_id in the session
    //     $cartId = session('cart_id');
    
    //     // Retrieve the cart
    //     $cart = Cart::find($cartId);
    
    //     if ($cart->products->contains($product->id)) {
    //         return response()->json(['message' => 'This product is already in your cart.'], 422);
    //     }
    //     // Associate the product with the cart
    //     $cart->products()->attach($product);
    
    //     return response()->json(['message' => 'Product added to cart.']);
    // }
    

    public function addProduct(Product $product)
{
    $user = auth()->user(); // Get the authenticated user

    // Check if the user has an existing cart
    $cart = Cart::where('user_id', $user->id)->first();

    if (!$cart) {
        // If no cart is found, create a new cart and associate it with the user
        $cart = new Cart();
        $cart->user_id = $user->id;
        $cart->save();
    }

    // Now, you should have a cart associated with the authenticated user
    $cartId = $cart->id;

    // Check if the product is already in the cart
    if ($cart->products->contains($product->id)) {
        return response()->json(['message' => 'This product is already in your cart.'], 422);
    }

    // Associate the product with the cart and add the user_id to the pivot table
    $cart->products()->attach($product);

    return response()->json(['message' => 'Product added to cart.']);
}

    

    // public function removeProductFromCart(Cart $cart, Product $product)
    // {

    //     $cart = Cart::findOrFail($cartId);
    // $product = Product::findOrFail($productId);
    
    //     // Detach the product from the cart's products
    //     $cart->products()->detach($product);
    
    //     return redirect('/')->with('success', 'Product removed from cart.');
    // }
    public function removeProductFromCart($cartId, $productId)
{
    $cart = Cart::findOrFail($cartId);
    $product = Product::findOrFail($productId);
   
    $cart->products()->detach($product);
   
    return redirect()->route("cart.show")->with('success', 'Product removed from cart.');
}

//clear cart
public function removeAllProductsFromCart(Cart $cart)
{
    $cart->products()->detach();

    return redirect()->route('cart.show')->with('success', 'All products removed from the cart.');
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
     * @param  \App\Models\Cart  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $card)
    {
        //
    }
}
