<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/all-users.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:45:31 GMT -->
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
                                        <h5>All Services</h5>

                                    </div>

                                    <div class="table-responsive table-product">
                                        <table class="table all-package theme-table" id="table_id">
                                            <thead>
                                                <tr>
                                                    <th>image</th>
                                                    <th>nomService</th>
                                                    <th>provider</th>
                                                    <th>prix</th>
                                                    <th>category</th>
                                                    <th>Option</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                             @foreach($services as $service )
                                                <tr>
                                                    <td>
                                                        <div class="table-image">
                                                            <img src="{{Vite::asset($service->image)}}" class="img-fluid"
                                                                alt="">
                                                        </div>
                                                    </td>

                                                    <td>{{$service->name}}</td>
                                                    <td>
                                                        <div class="user-name">
                                                            <span>{{$service->user->username}}</span>
                                                        </div>
                                                    </td>

                                                    <td>{{$service->price}}</td>
                                                    <td>{{$service->category_service->title}}</td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href="order-detail.html">
                                                                    <i class="ri-eye-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                            <form method="POST" action="{{ route('service.remove', ['id' => $service->id]) }}">
                                                                                                                            @csrf
                                                                                                                            @method('DELETE')

                                                                                                                            <button class="ri-delete-bin-line" type="submit">
                                                                                                                                </button>
                                                                                                                        </form>

                                                            </li>
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

    @include('back.elements.logoutMessage')
    @include('back.elements.importfoot')

</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/all-users.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:45:35 GMT -->
</html>
