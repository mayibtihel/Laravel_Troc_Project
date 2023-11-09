<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/list-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:45:49 GMT -->
@include('back.elements.importhead')


<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start -->
    @include('back.elements.header')
        <!-- Page Header End -->

        <!-- Page Body Start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
        @include('back.elements.sidebar')
            <!-- Page Sidebar Ends-->

            <!-- List Page Table Start -->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>List Page</h5>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table list-table theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated checkall"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>Title</span>
                                                            </div>
                                                        </th>
                                                        <th>Author</th>
                                                        <th>Date</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span class="theme-color">Blog</span>
                                                            </div>
                                                        </td>
                                                        <td>Root</td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <span class="d-block theme-color">Published</span>
                                                                <span>23-10-2020 at 6:12 AM</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <ul>
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
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="" value="">
                                                                </span>
                                                                <span class="theme-color">Cart</span> - Cart Page
                                                            </div>
                                                        </td>

                                                        <td>Root</td>

                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <span class="d-block theme-color">Published</span>
                                                                <span>23-10-2020 at 6:12 AM</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <ul>
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
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span class="theme-color">Checkout</span> - Checkout
                                                                Page
                                                            </div>
                                                        </td>

                                                        <td>Root</td>

                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <span class="d-block theme-color">Published</span>
                                                                <span>23-10-2020 at 6:12 AM</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <ul>
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
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span class="theme-color">Home</span> - Elementor
                                                            </div>
                                                        </td>

                                                        <td>Root</td>

                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <span class="d-block theme-color">Published</span>
                                                                <span>23-10-2020 at 6:12 AM</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <ul>
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
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span class="theme-color">Home2</span> <span>-
                                                                    Elementor</span>
                                                            </div>
                                                        </td>

                                                        <td>Root</td>

                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <span class="d-block theme-color">Published</span>
                                                                <span>23-10-2020 at 6:12 AM</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <ul>
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
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span class="theme-color">Home3</span> - Elementor
                                                            </div>
                                                        </td>

                                                        <td>Root</td>

                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <span class="d-block theme-color">Published</span>
                                                                <span>23-10-2020 at 6:12 AM</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <ul>
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
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span class="theme-color">my Account</span> - My
                                                                Account Page
                                                            </div>
                                                        </td>

                                                        <td>Root</td>

                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <span class="d-block theme-color">Published</span>
                                                                <span>23-10-2020 at 6:12 AM</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <ul>
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
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span class="theme-color">Privacy Policy</span> - Draft,
                                                                Privacy Policy Page
                                                            </div>
                                                        </td>

                                                        <td>Root</td>

                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <span class="d-block theme-color">Published</span>
                                                                <span>23-10-2020 at 6:12 AM</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <ul>
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
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span class="theme-color">Refund and Return
                                                                    Policy</span>
                                                                - Draft
                                                            </div>
                                                        </td>

                                                        <td>Root</td>

                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <span class="d-block theme-color">Published</span>
                                                                <span>23-10-2020 at 6:12 AM</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <ul>
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
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span class="theme-color">Simple Page</span>
                                                            </div>
                                                        </td>

                                                        <td>Root</td>

                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <span class="d-block theme-color">Published</span>
                                                                <span>23-10-2020 at 6:12 AM</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <ul>
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
                <!-- Container-fluid Ends-->

                <!-- footer start -->
            @include('back.elements.footer')
                <!-- footer end -->
            </div>
            <!-- List Page Table End -->
        </div>
        <!-- Page Body End -->

        <!-- Modal start -->
    @include('back.elements.logoutMessage')
        <!-- Modal End -->
    </div>
    <!-- page-wrapper End -->

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


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/list-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:45:49 GMT -->
</html>
