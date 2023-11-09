@include('front.elements.header')
<meta name="csrf-token" content="{{ csrf_token() }}">

<body>

@include('front.elements.navbars', ['cartItemCount' => $cartItemCount])
   
 

                          <div class="container mb-80 mt-50">
                            <div class="row">
                                <div class="col-lg-8 mb-40">
                                    <h1 class="heading-2 mb-10">Your Cart</h1>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-body">There are <span class="text-brand">{{ count($cart->products) }}</span> products in your cart</h6>
                                        <h6 class="text-body">
                                            <form method="POST" action="{{ route('cart.clear', ['cart' => $cart->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#" class="text-muted" onclick="event.preventDefault(); this.closest('form').submit();">
                                                    <i class="fi-rs-trash mr-5"></i>Clear Cart
                                                </a>
                                            </form>                                        
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="table-responsive shopping-summery">
                                        @if (count($cart->products) > 0)
                                        <table class="table table-wishlist">
                                            <thead>
                                                <tr class="main-heading">
                                                    <th class="custome-checkbox start pl-30">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                                                        <label class="form-check-label" for="exampleCheckbox11"></label>
                                                    </th>
                                                    <th scope="col" colspan="2">Product</th>
                                                    <th scope="col">Price</th>
                                                <th> Order </th>
                                                    <th scope="col" class="end">Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cart->products as $product)

                                                <tr>
                                                    <td class="custome-checkbox pl-30">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                                        <label class="form-check-label" for="exampleCheckbox3"></label>
                                                    </td>
                                                    <td class="image product-thumbnail">  
                                                        <img width="350px" height="300px" src="/images/{{ $product->image }}" alt="" >
                                                    </td>

                                                    {{-- <td class="image product-thumbnail"><img src="{{Vite::asset('resources/frontassets/assets/imgs/shop/product-3-1.jpg')}}" alt="#"></td> --}}
                                                    <td class="product-des product-name">
                                                        <h6 class="mb-5"><a class="product-name mb-10 text-heading" href="shop-product-right">{{ $product->name }}</a></h6>
                                                        <div class="product-rate-cover">
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width:90%">
                                                                </div>
                                                            </div>
                                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                        </div>
                                                    </td>
                                                    <td class="price" data-title="Price">
                                                        <h4 class="text-body">${{ $product->price }} </h4>
                                                    </td>
                                                 <td>    
                                                     
                                                     <form id="order-form" method="POST" action="{{ route('place.order', ['product' => $product->id, 'cart' => $cart->id]) }}">
                                                        @csrf
                                                        
                                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                            <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                                                            <input type="hidden" name="price" value="{{ $product->price }}"> <!-- Add this line -->

                                                            {{-- <a href="#" class="btn mb-20 w-100">Order</a> --}}
                                                            <button type="submit" class="btn mb-20 w-100" onclick="confirmOrder()">Order</button>
                                                       
                                                    </form>
                                                    </td>
                                               
                                                    <td class="action text-center" data-title="Remove">
                                                        {{-- <a href="#" class="text-body"><i class="fi-rs-trash"></i></a> --}}
                                                    
                                                        <form method="POST" action="{{ route('cart.remove', ['cart' => $cart->id, 'product' => $product->id]) }}">
                                                            @csrf
                                                           
                                                            {{-- @method('DELETE') <!-- Add this line --> --}}
                                                            {{-- <button type="submit" class="btn-link">remove</button> --}}
                                                            <a href="#" class="text-muted" onclick="confirmDelete(event, this.closest('form'))">
                                                                <i class="fi-rs-trash"></i>
                                                            </a>
                                                            
                                                        </form>
                                                    </td>
                                                  
                                               
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        @else
                                        <p>Your cart is empty.</p>
          
          
                                    @endif
                                    </div>
                                    <div class="divider-2 mb-30"></div>
                                    <div class="cart-action d-flex justify-content-between">
                                        <a class="btn " href="products"><i class="fi-rs-arrow-left mr-10"></i>Continue Shopping</a>
                                        {{-- <a class="btn  mr-10 mb-sm-15"><i class="fi-rs-refresh mr-10"></i>Update Cart</a> --}}
                                    </div>
                                    <div class="row mt-50">
                                        <div class="col-lg-7">
                                            {{-- <div class="calculate-shiping p-40 border-radius-15 border">
                                                <h4 class="mb-10">Calculate Shipping</h4>
                                                <p class="mb-30"><span class="font-lg text-muted">Flat rate:</span><strong class="text-brand">5%</strong></p>
                                                <form class="field_form shipping_calculator">
                                                    <div class="form-row">
                                                        <div class="form-group col-lg-12">
                                                         
                                                        </div>
                                                    </div>
                                                    <div class="form-row row">
                                                        <div class="form-group col-lg-6">
                                                            <input required="required" placeholder="State / Country" name="name" type="text">
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <input required="required" placeholder="PostCode / ZIP" name="name" type="text">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> --}}
                                        </div>
                                        <div class="col-lg-5">
                                            {{-- <div class="p-40">
                                                <h4 class="mb-10">Apply Coupon</h4>
                                                <p class="mb-30"><span class="font-lg text-muted">Using A Promo Code?</p>
                                                <form action="#">
                                                    <div class="d-flex justify-content-between">
                                                        <input class="font-medium mr-15 coupon" name="Coupon" placeholder="Enter Your Coupon">
                                                        <button class="btn"><i class="fi-rs-label mr-10"></i>Apply</button>
                                                    </div>
                                                </form>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-4">
                                    <div class="border p-md-4 cart-totals ml-30">
                                        <div class="table-responsive">
                                            <table class="table no-border">
                                                <tbody>
                                                    <tr>
                                                        <td class="cart_total_label">
                                                            <h6 class="text-muted">Subtotal</h6>
                                                        </td>
                                                        <td class="cart_total_amount">
                                                            <h4 class="text-brand text-end">$12.31</h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="col" colspan="2">
                                                            <div class="divider-2 mt-10 mb-10"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">
                                                            <h6 class="text-muted">Shipping</h6>
                                                        </td>
                                                        <td class="cart_total_amount">
                                                            <h5 class="text-heading text-end">Free</h4</td> </tr> <tr>
                                                        <td class="cart_total_label">
                                                            <h6 class="text-muted">Estimate for</h6>
                                                        </td>
                                                        <td class="cart_total_amount">
                                                            <h5 class="text-heading text-end">United Kingdom</h4</td> </tr> <tr>
                                                        <td scope="col" colspan="2">
                                                            <div class="divider-2 mt-10 mb-10"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">
                                                            <h6 class="text-muted">Total</h6>
                                                        </td>
                                                        <td class="cart_total_amount">
                                                            <h4 class="text-brand text-end">$12.31</h4>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                         
                                        </div>
                                        <a href="#" class="btn mb-20 w-100">Proceed To CheckOut<i class="fi-rs-sign-out ml-15"></i></a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                     
                        <script>
                            function confirmOrder() {
                                Swal.fire({
                                    title: 'Are you sure?',
                                    text: 'Do you want to place this order?',
                                    icon: 'question',
                                    showCancelButton: true,
                                    confirmButtonText: 'Yes, place the order',
                                    cancelButtonText: 'Cancel'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Submit the form
                                        document.getElementById('order-form').submit();
                                    }
                                });
                        
                                // Prevent the default form submission
                                event.preventDefault();
                            }
                        </script>
                        
                        <script>
                            function confirmDelete(event, form) {
                                event.preventDefault();
                                
                                Swal.fire({
                                    title: 'Are you sure?',
                                    text: 'Do you want to remove this item from your cart?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Yes, remove it',
                                    cancelButtonText: 'Cancel'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        form.submit();
                                    }
                                });
                            }
                        </script>
                        