<div class="sidebar-wrapper">
    <div id="sidebarEffect"></div>
    <div>
        <div class="logo-wrapper logo-wrapper-center">
            <a href="/admin/index" data-bs-original-title="" title="">
                <img class="img-fluid for-white" src="{{Vite::asset('resources/backassets/assets/images/logo/full-white.png')}}" alt="logo">
            </a>
            <div class="back-btn">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="toggle-sidebar">
                <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
            </div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="/admin/index">
                <img class="img-fluid main-logo main-white" src="{{Vite::asset('resources/backassets/assets/images/logo/logo.png')}}" alt="logo">
                <img class="img-fluid main-logo main-dark" src="{{Vite::asset('resources/backassets/assets/images/logo/logo-white.png')}}"
                     alt="logo">
            </a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow">
                <i data-feather="arrow-left"></i>
            </div>

            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"></li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="/admin/index">
                            <i class="ri-home-line"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-store-3-line"></i>
                            <span>Product</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/products">Products</a>
                            </li>

                            <li>
                                <a href="{{ route('products.add') }}">Add New Products</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                                <i class="ri-store-3-line"></i>
                                                <span>Service</span>
                                            </a>
                                            <ul class="sidebar-submenu">
                                                <li>
                                                    <a href="{{ route('service.list') }}">list service</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('products.add') }}">Add New Products</a>
                                                </li>
                                            </ul>
                                        </li>

                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-list-check-2"></i>
                            <span>Category</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/category">Category List</a>
                            </li>

                            <li>
                                <a href="/admin/add-new-category">Add New Category</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-list-settings-line"></i>
                            <span>Attributes</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/attributes">Attributes</a>
                            </li>

                            <li>
                                <a href="/admin/add-new-attributes">Add Attributes</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-user-3-line"></i>
                            <span>Users</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/all-users">All users</a>
                            </li>
                            <li>
                                <a href="/admin/add-new-user">Add new user</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-user-3-line"></i>
                            <span>Roles</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/role">All roles</a>
                            </li>
                            <li>
                                <a href="/admin/create-role">Create Role</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="/admin/media">
                            <i class="ri-price-tag-3-line"></i>
                            <span>Media</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-archive-line"></i>
                            <span>Orders</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/order-list">Order List</a>
                            </li>
                            {{-- <li>
                                <a href="/admin/order-detail">Order Detail</a>
                            </li>
                            <li>
                                <a href="/admin/order-tracking">Order Tracking</a>
                            </li> --}}
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="/admin/deliveryagent">
                            <i class="ri-archive-line"></i>
                            <span>Delivery agent</span>
                        </a>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="/admin/delivery">
                                <i class="ri-archive-line"></i>
                                <span>Deliveries</span>
                            </a>
                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-focus-3-line"></i>
                            <span>Localization</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/translation">Translation</a>
                            </li>

                            <li>
                                <a href="/admin/currency-rates">Currency Rates</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-price-tag-3-line"></i>
                            <span>Coupons</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/coupon-list">Coupon List</a>
                            </li>

                            <li>
                                <a href="/admin/create-coupon">Create Coupon</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="/admin/taxes">
                            <i class="ri-price-tag-3-line"></i>
                            <span>Tax</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="/admin/product-review">
                            <i class="ri-star-line"></i>
                            <span>Product Review</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="/reclamation">
                            <i class="ri-phone-line"></i>
                            <span>Reclamation</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-settings-line"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/profile-setting">Profile Setting</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="/admin/reports">
                            <i class="ri-file-chart-line"></i>
                            <span>Reports</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="/admin/list-page">
                            <i class="ri-list-check"></i>
                            <span>List Page</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="right-arrow" id="right-arrow">
                <i data-feather="arrow-right"></i>
            </div>
        </nav>
    </div>
</div>
