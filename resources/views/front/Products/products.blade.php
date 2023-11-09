@include('front.elements.header')

<body>
<!-- Quick view -->
@include('front.elements.navbars')
<!--End header-->
<main class="main">
    <div class="page-header mt-30 mb-50">
        <div class="container">
            <div class="archive-header">
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <h1 class="mb-15">Products</h1>
                        <div class="breadcrumb">
                            <a href="index" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <span> <a class="btn btn-solid" href="/products_add">Add Product</a> </span>
<br>
    <br>
    <br>


    <div class="container mb-30">
        <div class="row">
            <div class="col-12">

                <div class="row product-grid">
                    @foreach ($product as $prod)
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">

                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">

                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right">
                                        <img width="350px" height="300px" src="/images/{{ $prod->image }}" alt="" >
                                    </a>
                                </div>
                                <div class="product-action-1">

                                    <a href="#" aria-label="Quick View" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewProductModal-{{ $prod->id }}">
                                        <i class="fi-rs-eye"></i>
                                    </a>
                                </div>


                            </div>
                            <div class="product-content-wrap">

                                <h2><a href="shop-product-right">{{ $prod->name }}</a></h2>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1">{{ $prod->owner}}</a></span>
                                </div>
                                <div class="product-price">
                                    <span>{{ $prod->price }} DT</span>
                                </div>
                               {{-- <div>
                                    <span class="font-small text-muted"><a href="vendor-details-1">{{ $prod->description }}</a></span>
                                </div>--}}
                                <div class="product-card-bottom">
                                    {{--<div class="product-price">
                                        <span>{{ $prod->price }} DT</span>
                                    </div>--}}

                                    <div class="add-cart">
                                        {{-- <a class="add" href="shop-cart"><i class="fi-rs-shopping-cart mr-5"></i> Add </a> --}}
                                        <form method="POST" action="{{ route('cart.add', ['product' => $prod->id]) }}">
                                            @csrf
                                            <button type="submit" class="btn mb-20 w-100 add-to-cart-button"> <i class="fi-rs-shopping-cart mr-5"></i> Add to Cart</button>
                                        </form>

                                        <a class="add" href="{{ route('products.edit', ['id' => $prod->id]) }}"><i class="fi-rs-edit mr-5"></i> Edit </a>




                                        <form method="POST" action="{{ route('product.clear', ['id' => $prod->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                          <button class="add" style="background-color: darkred" type="submit">Delete<i class="fi-rs-file-delete mr-5"></i></button>

                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--end product card-->




                    {{--Modal_QuickView--Start--}}


                        <div class="modal fade custom-modal" id="quickViewProductModal-{{ $prod->id }}" tabindex="-1" aria-labelledby="quickViewModalLabel-{{ $prod->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                                <div class="detail-gallery">
                                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>


                                                    <!-- MAIN SLIDES -->
                                                    <div class="product-image-slider">
                                                        <figure class="border-radius-10">
                                                            <img src="/images/{{ $prod->image }}" alt="product image" /> </figure>
                                                    </div>
                                                    <!-- THUMBNAILS -->
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="detail-info pr-30 pl-30">
                                                    <span class="stock-status out-stock"> Sale Off </span>

                                                    <h3 class="title-detail"><a href="{{ route('products.getSingleProduct', ['id' => $prod->id]) }}" class="text-heading">{{ $prod->name }}</a></h3>

                                                    <div class="clearfix product-price-cover">
                                                        <div class="product-price primary-color float-left">
                                                            <span class="current-price text-brand">{{ $prod->price }} DT</span>
                                                        </div>
                                                    </div>

                                                    <div class="detail-extralink mb-30">

                                                            <div class="product-extra-link2">
                                                                <button type="submit" class="button">
                                                            <a class="button button-add-to-cart" href="{{ route('products.getSingleProduct', ['id' => $prod->id]) }}" >Details</a>
                                                                </button>

                                                           </div>

                                                        <div class="product-extra-link2">
                                                            <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="font-xs">
                                                        <ul>
                                                            <li class="mb-5">Vendor: <span class="text-brand">Owner</span></li>
                                                            {{--<li class="mb-5">MFG:<span class="text-brand"> Jun 4.2022</span></li>--}}
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--Modal_QuickView--End--}}

                    @endforeach

                </div>
                <!--product grid-->



                <div class="pagination-area mt-20 mb-20">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.add-to-cart-button').click(function (e) {
                e.preventDefault();
                console.log('Button clicked');
                // Make an AJAX request to add the product to the cart
                $.ajax({
                    url: $(this).closest('form').attr('action'),
                    method: 'POST',
                    data: $(this).closest('form').serialize(),
                    success: function (data) {
                        // Show a SweetAlert popup with the success message
                        Swal.fire({
                            icon: 'success',
                            title: 'Product added to cart',
                        });
                    },
                    error: function (error) {
                        // Show a SweetAlert popup with the error message
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'This product is already in your cart.',
                        });
                    }
                });
            });
        });
    </script>
    
    



    @if(session('success'))
    <script>
        // Use SweetAlert to display a pop-up message
        Swal.fire({
            icon: 'success',
            title: 'Item Added to Cart',
            text: "{{ session('success') }}",
        });
    </script>
@endif
@if (session('error'))
<script>
    // Use SweetAlert to display a pop-up message
    Swal.fire({
        icon: 'error',
        title: 'Item is already in Cart',
        text: "{{ session('error') }}",
    });
</script>
@endif

</main>


@include('front.elements.footer')


@include('front.elements.footerScripts')

