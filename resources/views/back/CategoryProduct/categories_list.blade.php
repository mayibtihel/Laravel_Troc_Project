<!DOCTYPE html>
<html lang="en" dir="ltr">


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
                                    <h5>Categories List</h5>
                                    <div class="right-options">
                                        <ul>
                                            <li>
                                                <a class="btn btn-solid" href="{{ route('categories.add') }}">Add Category</a>
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
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($catproducts as $catproducts)
                                                <tr data-bs-toggle="offcanvas" href="#order-details">

                                                    <td>{{ $catproducts->id }}</td>
                                                    <td>{{ $catproducts->title }}</td>
                                                    <td>{{ $catproducts->description }}</td>


                                                  <td>
                                                        <a class="add" href="{{ route('categories.edit', ['id' => $catproducts->id]) }}"><i class="fi-rs-edit mr-5"></i>
                                                            <i class="ri-file-edit-fill"></i>
                                                        </a>
                                                    </td>

                                                    <td>

                                                        <form method="POST" action="{{ route('category.clear', ['id' => $catproducts->id]) }}">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button class="btn btn-solid" type="submit">Delete</button>
                                                        </form>

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


</html>



