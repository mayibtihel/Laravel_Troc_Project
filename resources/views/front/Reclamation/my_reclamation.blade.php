@include('front.elements.header')

<body>
<!-- Quick view -->
@include('front.elements.navbars')
<!--End header-->
<main class="main">
    <div class="page-header mt-30 mb-50">
        <div class="container">
            <div class="archive-header">
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <h1 class="mb-15">My Reclamations</h1>
                        <div class="breadcrumb">
                            <a href="index" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <span> <a class="btn btn-solid" href="/reclamations">Add Reclamation</a> </span>
    <br>
    <br>
    <br>


    <div class="container mb-30">
        <div class="row">
            <div class="col-12">

                <div class="row product-grid">
                    @foreach ($reclamations as $reclamation)
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">

                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">

                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right">
                                            <img width="350px" height="300px" src="/images/{{ $reclamation->image }}" alt="" >
                                        </a>
                                    </div>



                                </div>
                                <div class="product-content-wrap">

                                    <h2><a href="shop-product-right">{{ $reclamation->title }}</a></h2>

                                    <div class="product-price">
                                        <span>{{ $reclamation->description }} </span>

                            </div>

                        </div>
                        <!--end product card-->



                    @endforeach

                </div>
                <!--product grid-->



                <div class="pagination-area mt-20 mb-20">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </div>


@include('front.elements.footer')


@include('front.elements.footerScripts')

