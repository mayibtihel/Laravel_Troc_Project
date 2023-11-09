<!DOCTYPE html>
<html lang="en">

@include('back.elements.importhead')

<head>
    <meta charset="UTF-8">
    <title>Add Product Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>


<body>

<div class="tap-top">
    <span class="lnr lnr-chevron-up"></span>
</div>

<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    @include('back.elements.header')

    <div class="page-body-wrapper">

        @include('back.elements.sidebar')


        <div class="page-body">
            <!-- New Product Add Start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-8 m-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Information</h5>
                                        </div>


                                        <form class="theme-form theme-form-2 mega-form" action="{{route('products.adminst')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Product Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" class="form-control" placeholder="Product Name">

                                                    @error('name')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                     @enderror
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Description</label>
                                                <div class="col-sm-9">
                                                    <div class="bs-example">
                                                        <textarea type="text" name="description" class="form-control" placeholder="Description" rows="5"></textarea>
                                                        @error('description')
                                                         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Price</label>
                                                <div class="col-sm-9">
                                                    <div class="bs-example">
                                                        <input type="text" name="price" class="form-control" placeholder="Price">
                                                         @error('price')
                                                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                          @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="col-sm-3 col-form-label form-label-title">Images</label>
                                                <div class="col-sm-9">

                                                    <input class="form-control form-choose" type="file"  name="image" placeholder="image" multiple>
                                                    {{-- @error('image')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                     @enderror--}}
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-primary ml-3">Add Product</button>








                                        </form>
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

                    <!-- footer En -->
                </div>
                <!-- Container-fluid End -->
            </div>
            <!-- Page Body End -->
        </div>
        <!-- page-wrapper End -->
        @include('back.elements.logoutMessage')
        @include('back.elements.importfoot')


</body>


</html>

