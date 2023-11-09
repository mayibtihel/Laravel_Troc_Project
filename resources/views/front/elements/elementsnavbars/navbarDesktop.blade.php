<header class="header-area header-style-1 header-height-2">
    <div class="mobile-promotion">
        <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
    </div>
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>

                            <li><a href="page-account">My Account</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>100% Secure delivery without contacting the courier</li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>
                            <li>
                                <a class="language-dropdown-active" href="#">English <i class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li>
                                        <a href="#"><img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/flag-fr.png')}}" alt="" />Français</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/flag-dt.png')}}" alt="" />Deutsch</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/flag-ru.png')}}" alt="" />Pусский</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="language-dropdown-active" href="#">USD <i class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li>
                                        <a href="#"><img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/flag-fr.png')}}" alt="" />INR</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/flag-dt.png')}}" alt="" />MBP</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/flag-ru.png')}}" alt="" />EU</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="index"><img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/logo.svg')}}" alt="logo" /></a>
                </div>
                <div class="header-right">

                    <div class="header-action-right">
                        <div class="header-action-2">


                            <div class="header-action-icon-2">
                                {{-- <a class="mini-cart-icon" href="cart">
                                    <img alt="Nest" src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/icon-cart.svg')}}" />
                                    {{-- <span class="pro-count blue">{{ $cartItemCount }}</span> --}}
                                {{-- </a> --}} 

                                <a class="mini-cart-icon" href="cart">
                                    <img alt="Nest" src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/icon-cart.svg')}}" />
                                    {{-- @if ($cartItemCount > 0)
                                        <span class="pro-count blue">{{ $cartItemCount }}</span>
                                    @endif --}}
                                </a>
                                <a href="cart"><span class="lable">Cart</span></a>
                                {{-- <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right"><img alt="Nest" src="{{Vite::asset('resources/frontassets/assets/imgs/shop/thumbnail-3.jpg')}}" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right">Daisy Casual Bag</a></h4>
                                                <h4><span>1 × </span>$800.00</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right"><img alt="Nest" src="{{Vite::asset('resources/frontassets/assets/imgs/shop/thumbnail-2.jpg')}}" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right">Corduroy Shirts</a></h4>
                                                <h4><span>1 × </span>$3200.00</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$4000.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="cart" class="outline">View cart</a>
                                            <a href="shop-checkout">Checkout</a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="header-action-icon-2">
                                <a href="page-account">
                                    <img class="svgInject" alt="Nest" src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/icon-user.svg')}}" />
                                </a>
                                <a href="page-account"><span class="lable ml-0">{{auth()->user()->name}}</span></a>

                                <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                    <ul>
                                        <li>
                                            <a href="admin"><i class="fi fi-rs-user mr-10"></i>admin</a>
                                        </li>
                                        <li>
                                           <a href="{{ route('service.create') }}"><i class="fi fi-rs-user mr-10"></i>ajouterService</a>
                                        </li>
                                        <li>
                                           <a href="{{ route('servicedashboard',['idServiceProvider' => 1]) }}"><i class="fi fi-rs-user mr-10"></i>calendrie</a>
                                        </li>
                                        <li>
                                            <a href="page-account"><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                        </li>

                                        <li>
                                            <a href="my_reclamation/{id}"><i class="fi fi-rs-label mr-10"></i>My Reclamations</a>
                                        </li>

                                        <li>

                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit">Logout</button>
                                            </form>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index"><img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/logo.svg')}}" alt="logo" /></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categories-button-active" href="#">
                            <span class="fi-rs-apps"></span> <span class="et">Browse</span> All Categories
                            <i class="fi-rs-angle-down"></i>
                        </a>
                        <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                            <div class="d-flex categori-dropdown-inner">
                                <ul>
                                    <li>
                                        <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/category-1.svg')}}" alt="" />Milks and Dairies</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/category-2.svg')}}" alt="" />Clothing & beauty</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/category-3.svg')}}" alt="" />Pet Foods & Toy</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/category-4.svg')}}" alt="" />Baking material</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/category-5.svg')}}" alt="" />Fresh Fruit</a>
                                    </li>
                                </ul>
                                <ul class="end">
                                    <li>
                                        <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/category-6.svg')}}" alt="" />Wines & Drinks</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/category-7.svg')}}" alt="" />Fresh Seafood</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/category-8.svg')}}" alt="" />Fast food</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/category-9.svg')}}" alt="" />Vegetables</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/category-10.svg')}}" alt="" />Bread and Juice</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="more_slide_open" style="display: none">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/icon-1.svg')}}" alt="" />Milks and Dairies</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/icon-2.svg')}}" alt="" />Clothing & beauty</a>
                                        </li>
                                    </ul>
                                    <ul class="end">
                                        <li>
                                            <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/icon-3.svg')}}" alt="" />Wines & Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right"> <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/icon-4.svg')}}" alt="" />Fresh Seafood</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        <nav>
                            <ul>
                                <li class="hot-deals"><img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/icon-hot.svg')}}" alt="hot deals" /><a href="shop-grid-right">Deals</a></li>

                                <li>
                                    <a href="{{ URL::to('/services')}}">services</a>
                                </li>

                                <li><a href="/products">Products</a></li>

                                <li><a href="/reclamations">Reclamation</a></li>

                              {{--<li> <a href="{{ URL::to('/products/products_list')}}">Products</a> </li>--}}


                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-flex">
                    <img src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/icon-headphone.svg')}}" alt="hotline" />
                    <p>1900 - 888<span>24/7 Support Center</span></p>
                </div>
                <div class="header-action-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist">
                                <img alt="Nest" src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/icon-heart.svg')}}" />
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="cart">
                                <img alt="Nest" src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/icon-cart.svg')}}" />
                                {{-- @if ($cartItemCount > 0)
                                    <span class="pro-count blue">{{ $cartItemCount }}</span>
                                @endif --}}
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right"><img alt="Nest" src="{{Vite::asset('resources/frontassets/assets/imgs/shop/thumbnail-3.jpg')}}" /></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="shop-product-right">Plain Striola Shirts</a></h4>
                                            <h3><span>1 × </span>$800.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right"><img alt="Nest" src="{{Vite::asset('resources/frontassets/assets/imgs/shop/thumbnail-4.jpg')}}" /></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="shop-product-right">Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="shop-cart">View cart</a>
                                        <a href="shop-checkout">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
