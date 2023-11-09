@include('front.elements.header')

<body>
@include('front.elements.navbars')


<!--End header-->
<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Vendor <span></span> Dashboard
            </div>
        </div>
    </div>
    <div class="page-content pt-50">
        <div class="container">
            <h1 class="display-2 mt-30 pb-30">Dashboard</h1>
            <hr class="mb-80" />
            <div class="product-info">
                <div class="tab-style3">
                    <ul class="nav nav-tabs text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">calendrie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Vente</a>
                        </li>
                    </ul>
                    <div class="tab-content shop_info_tab entry-main-content">
                        <div class="tab-pane fade show active" id="Description">
                            {!! $calendar->calendar() !!}
                            {!! $calendar->script() !!}

                        </div>
                        <div class="tab-pane fade" id="Additional-info">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h3 class="mb-30">Recent Orders</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>#1357</td>
                                                <td>March 45, 2020</td>
                                                <td>Processing</td>
                                                <td>$125.00 for 2 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2468</td>
                                                <td>June 29, 2020</td>
                                                <td>Completed</td>
                                                <td>$364.00 for 5 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2366</td>
                                                <td>August 02, 2020</td>
                                                <td>Completed</td>
                                                <td>$280.00 for 3 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#1357</td>
                                                <td>March 45, 2020</td>
                                                <td>Processing</td>
                                                <td>$125.00 for 2 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2468</td>
                                                <td>June 29, 2020</td>
                                                <td>Completed</td>
                                                <td>$364.00 for 5 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2366</td>
                                                <td>August 02, 2020</td>
                                                <td>Completed</td>
                                                <td>$280.00 for 3 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#1357</td>
                                                <td>March 45, 2020</td>
                                                <td>Processing</td>
                                                <td>$125.00 for 2 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2468</td>
                                                <td>June 29, 2020</td>
                                                <td>Completed</td>
                                                <td>$364.00 for 5 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="primary-sidebar">
                                        <div class="sidebar-widget product-sidebar mt-15 p-30 bg-grey border-radius-10">
                                            <h5 class="section-title style-1 mb-30">Best sell</h5>
                                            <div class="single-post clearfix">
                                                <div class="image">
                                                    <img src="{{Vite::asset('resources/frontassets/assets/imgs/shop/thumbnail-3.jpg')}}" alt="#" />
                                                </div>
                                                <div class="content pt-10">
                                                    <h5><a href="shop-product-detail">Chen Cardigan</a></h5>
                                                    <p class="price mb-0 mt-5">$99.50</p>
                                                    <div class="product-rate">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-post clearfix">
                                                <div class="image">
                                                    <img src="{{Vite::asset('resources/frontassets/assets/imgs/shop/thumbnail-4.jpg')}}" alt="#" />
                                                </div>
                                                <div class="content pt-10">
                                                    <h6><a href="shop-product-detail">Chen Sweater</a></h6>
                                                    <p class="price mb-0 mt-5">$89.50</p>
                                                    <div class="product-rate">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-post clearfix">
                                                <div class="image">
                                                    <img src="{{Vite::asset('resources/frontassets/assets/imgs/shop/thumbnail-5.jpg')}}" alt="#" />
                                                </div>
                                                <div class="content pt-10">
                                                    <h6><a href="shop-product-detail">Colorful Jacket</a></h6>
                                                    <p class="price mb-0 mt-5">$25</p>
                                                    <div class="product-rate">
                                                        <div class="product-rating" style="width: 60%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-50 mt-50">
                <div class="col-lg-12">
                    <h3 class="mb-30">Your Products</h3>
                    <div class="row product-grid">
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right">
                                            <img class="default-img" src="{{Vite::asset('resources/frontassets/assets/imgs/shop/product-1-1.jpg')}}" alt="" />
                                            <img class="hover-img" src="{{Vite::asset('resources/frontassets/assets/imgs/shop/product-1-2.jpg')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare"><i class="fi-rs-shuffle"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right">Snack</a>
                                    </div>
                                    <h2><a href="shop-product-right">Seeds of Change Organic Quinoe Naturel</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="vendor-details-1">NestFood</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="shop-cart"><i class="fi-rs-edit mr-5"></i>Edit </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right">
                                            <img class="default-img" src="{{Vite::asset('resources/frontassets/assets/imgs/shop/product-2-1.jpg')}}" alt="" />
                                            <img class="hover-img" src="{{Vite::asset('resources/frontassets/assets/imgs/shop/product-2-2.jpg')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare"><i class="fi-rs-shuffle"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right">Hodo Foods</a>
                                    </div>
                                    <h2><a href="shop-product-right">All Natural Italian-Style Chicken Meatballs</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (3.5)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="vendor-details-1">Stouffer</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$52.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="shop-cart"><i class="fi-rs-edit mr-5"></i>Edit </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
    </div>
</main>
@include('front.elements.footer')


@include('front.elements.footerScripts')
