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
                                                    <a class="btn btn-solid" href="{{ route('products.add') }}">Add Product</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="table-responsive">


                                            <table class="table all-package order-table theme-table" id="table_id">
                                                <thead>
                                                <tr>
                                                    {{-- <th>Order Image</th> --}}
                                                    <th>ID Products</th>
                                                    <th>Name</th>
                                                    <th>Owner</th>
                                                    <th>Category</th>
                                                    <th>Price</th>
                                                    <th>Image</th>
                                                    <th>Description</th>
                                                    <th>Details</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($products as $product)
                                                    <tr data-bs-toggle="offcanvas" href="#order-details">

                                                        <td>{{ $product->id }}</td>
                                                        <td>{{ $product->name }}</td>
                                                        <td>{{ $product->user_id }}</td>
                                                        <td>{{ $product->category_product_id }}</td>
                                                        <td>{{ $product->price }}</td>
                                                        <td>  <img width="150px" height="150px" src="/images/{{ $product->image }}" alt="" >
                                                        <td>{{ $product->description }}</td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('products.getSingleProduct', ['id' => $product->id]) }}" >
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>

                                                                </li>
                                                                <!-- Add more action links here -->
                                                            </ul>
                                                        </td>

                                                        <td>
                                                                    <a class="add" href="{{ route('products.edit', ['id' => $product->id]) }}"><i class="fi-rs-edit mr-5"></i>
                                                                        <i class="ri-file-edit-fill"></i>
                                                                    </a>
                                                        </td>

                                                        <td>

                                                            <form method="POST" action="{{ route('product.clear', ['id' => $product->id]) }}">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit">Delete
                                                                    <i class="fi-rs-file-delete mr-5"></i></button>
                                                            </form>

                                                         {{--   <a class="add" href="{{  route('product.clear', ['id' => $product->id]) }}"><i class="fi-rs-file-delete mr-5"></i> delette
                                                            <i class="ri-eye-line"></i>  </a>--}}

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



