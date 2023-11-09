<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:45:44 GMT -->
@include('back.elements.importhead')

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
    @include('back.elements.header')

    <!-- Page Header Ends-->

        <!-- Page Body Start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
        @include('back.elements.sidebar')
            <!-- Page Sidebar Ends-->

            <!-- Container-fluid starts-->
            <div class="page-body">
                <!-- All User Table Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Category</h5>
                                        <form class="d-inline-flex">
                                            <a href="/admin/add-new-category"
                                                class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus-square"></i>Add New
                                            </a>
                                        </form>
                                    </div>

                                    <div class="table-responsive category-table">
                                        <div>
                                            <table class="table all-package theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th>Date</th>
                                                        <th>Product Image</th>
                                                        <th>Icon</th>
                                                        <th>Slug</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>Aata Buscuit</td>

                                                        <td>26-12-2021</td>

                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/1.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="category-icon">
                                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                        </td>

                                                        <td>buscuit</td>

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
                                                        <td>Cold Brew Coffee</td>

                                                        <td>21-05-2022</td>

                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/2.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="category-icon">
                                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/cup.svg" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>coffee</td>

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
                                                        <td>Peanut Butter Cookies</td>

                                                        <td>25-12-2021</td>

                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/3.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="category-icon">
                                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/meats.svg" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>cookies</td>

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
                                                        <td>Wheet Flakes</td>

                                                        <td>10-05-2022</td>

                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/4.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="category-icon">
                                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/breakfast.svg"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                        </td>

                                                        <td>flakes</td>

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
                                                        <td>Potato Chips</td>

                                                        <td>05-01-2022</td>

                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/5.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="category-icon">
                                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/frozen.svg" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>chips</td>

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
                                                        <td>Tuwer Dal</td>

                                                        <td>20-08-2022</td>

                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/6.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="category-icon">
                                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/biscuit.svg" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>dal</td>

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
                                                        <td>Almond Milk</td>

                                                        <td>11-09-2022</td>

                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/7.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="category-icon">
                                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/milk.svg" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>milk</td>

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
                                                        <td>Wheat Bread</td>

                                                        <td>20-09-2022</td>

                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/11.png')}}"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="category-icon">
                                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/grocery.svg" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>bread</td>

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
                                                        <td>Dog Food</td>

                                                        <td>30-08-2022</td>

                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/8.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="category-icon">
                                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/drink.svg" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>dog Food</td>

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
                                                        <td>Fresh Meat</td>

                                                        <td>30-03-2022</td>

                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/9.png')}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="category-icon">
                                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/milk.svg" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>meat</td>

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
                                                        <td>Classic Coffee</td>

                                                        <td>18-02-2022</td>

                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{Vite::asset('resources/backassets/assets/images/product/10.png')}}"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="category-icon">
                                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/pet.svg" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>coffee</td>

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
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- All User Table Ends-->

                <div class="container-fluid">
                    <!-- footer start-->
                @include('back.elements.footer')
                    <!-- footer end-->
                </div>
            </div>
            <!-- Container-fluid end -->
        </div>
        <!-- Page Body End -->

        <!-- Modal Start -->
    @include('back.elements.logoutMessage')
        <!-- Modal End -->
    </div>

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


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:45:44 GMT -->
</html>
