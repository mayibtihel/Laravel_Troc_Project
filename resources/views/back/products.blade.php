<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:45:42 GMT -->
@include('back.elements.importhead')
<body>
    <!-- tap on top start-->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
    @include('back.elements.header')
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
        @include('back.elements.sidebar')
            <!-- Page Sidebar Ends-->

            <!-- Container-fluid starts-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title d-sm-flex d-block">
                                        <h5>Products List</h5>
                                        <div class="right-options">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">import</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Export</a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-solid" href="/admin/add-new-product">Add Product</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                       {{--     <table class="table all-package theme-table table-product" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>Product Image</th>
                                                        <th>Product Name</th>
                                                        <th>Category</th>
                                                        <th>Current Qty</th>
                                                        <th>Price</th>
                                                        <th>Status</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/1.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Aata Buscuit</td>

                                                        <td>Buscuit</td>

                                                        <td>12</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="/admin/order-detail">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/2.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Cold Brew Coffee</td>

                                                        <td>Drinks</td>

                                                        <td>10</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="/admin/order-detail">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/3.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Peanut Butter Cookies</td>

                                                        <td>Cookies</td>

                                                        <td>9</td>

                                                        <td class="td-price">$86.35</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="/admin/order-detail">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/4.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Wheet Flakes</td>

                                                        <td>Flakes</td>

                                                        <td>8</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="/admin/order-detail">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/5.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Potato Chips</td>

                                                        <td>Chips</td>

                                                        <td>23</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="/admin/order-detail">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/6.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Tuwer Dal</td>

                                                        <td>Dals</td>

                                                        <td>50</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="/admin/order-detail">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/7.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Almond Milk</td>

                                                        <td>Milk</td>

                                                        <td>25</td>

                                                        <td class="td-price">$121.43</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="/admin/order-detail">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/11.png')}}"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                        </td>

                                                        <td>Wheat Bread</td>

                                                        <td>Breads</td>

                                                        <td>6</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="/admin/order-detail">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/8.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Dog Food</td>

                                                        <td>Pet Food</td>

                                                        <td>11</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="/admin/order-detail">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/9.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Fresh Meat</td>

                                                        <td>Meats</td>

                                                        <td>18</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="/admin/order-detail">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/10.png')}}"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                        </td>

                                                        <td>Classic Coffee</td>

                                                        <td>Coffee</td>

                                                        <td>25</td>

                                                        <td class="td-price">$86.35</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="/admin/order-detail">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>--}}

                                            <table class="table all-package order-table theme-table" id="table_id">
                                                <thead>
                                                <tr>
                                                    {{-- <th>Order Image</th> --}}
                                                    <th>ID Products</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Image</th>
                                                    <th>Description</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($products as $product)
                                                    <tr data-bs-toggle="offcanvas" href="#order-details">
                                                        {{-- <td>
                                            <span class="order-image">
                                            <img src="{{ Vite::asset('resources/backassets/assets/images/product/2.png') }}" alt="users">
                                            </span>
                                            </td> --}}
                                                        <td>{{ $product->id }}</td>
                                                        <td>{{ $product->name }}</td>
                                                        <td>{{ $product->price }}</td>
                                                        <td> <img src="{{Vite::asset('resources/backassets/assets/images/product/10.png')}}"></td>

                                                       {{-- <td>{{ $product->image }}</td>--}}
                                                        <td>{{ $product->description }}</td>

                                                        {{--<td class="order-success">
                                                            <span>{{ $order->status }}</span>
                                                        </td>--}}
                                                        <td></td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="/admin/order-detail">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>
                                                                <!-- Add more action links here -->
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <div class="container-fluid">
                    <!-- footer start-->
                    @include('back.elements.footer')
                </div>
            </div>
        </div>
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    @include('back.elements.logoutMessage')
    <!-- Modal End -->

    <!-- Delete Modal Box Start -->
    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>The permission for the use/group, preview is inherited from the object, object will create a
                            new permission for this object</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box text-center">
                        <div class="wrapper">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>
                        </div>
                        <h4 class="text-content">It's Removed.</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Modal Box End -->
    @include('back.elements.importfoot')

</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:45:42 GMT -->
</html>



