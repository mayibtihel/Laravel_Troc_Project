<!DOCTYPE html>
<html lang="en" dir="ltr">


@include('back.elements.importhead')


<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper start -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
    @include('back.elements.header')
        <!-- Page Header Ends-->

        <!-- Page Body start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
        @include('back.elements.sidebar')
            <!-- Page Sidebar Ends-->

            <div class="page-body">

                <!-- New Product Add Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-xxl-8 col-lg-10 m-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Add Attribute</h5>
                                            </div>

                                            <form class="theme-form theme-form-2 mega-form">
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Attribute
                                                        Name</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text"
                                                            placeholder="Attribute Name">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-start">
                                                    <label class="col-sm-3 col-form-label form-label-title">Attribute
                                                        Value</label>
                                                    <div class="col-sm-9">
                                                        <div class="row g-sm-4 g-3">
                                                            <div class="col-sm-10 col-9">
                                                                <input class="form-control" type="text"
                                                                    placeholder="Attribute Value">
                                                            </div>

                                                            <div class="col-sm-2 col-3">
                                                                <button
                                                                    class="btn text-danger h-100 w-100">Remove</button>
                                                            </div>

                                                            <div class="col-xxl-4">
                                                                <button class="btn text-white theme-bg-color">Add
                                                                    Value</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <button class="btn ms-auto theme-bg-color text-white">Add Attribute</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->

                <!-- footer Start -->
            @include('back.elements.footer')

            <!-- footer End -->
            </div>
            <!-- Container-fluid End -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End -->
    @include('back.elements.logoutMessage')
    @include('back.elements.importfoot')

</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/add-new-attributes.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:45:45 GMT -->
</html>
