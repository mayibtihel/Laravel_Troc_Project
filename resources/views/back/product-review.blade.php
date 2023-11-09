<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/product-review.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:45:48 GMT -->
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

            <!-- product review section start -->
            <div class="page-body">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <!-- Table Start -->
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Product Reviews</h5>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="user-table ticket-table review-table theme-table table"
                                                id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Customer Name</th>
                                                        <th>Product Name</th>
                                                        <th>Rating</th>
                                                        <th>Comment</th>
                                                        <th>Published</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>Maureen Biologist</td>
                                                        <td>Outwear & Coats</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>02</td>
                                                        <td>Caroline Harris</td>
                                                        <td>Slim Fit Plastic Coat</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>03</td>
                                                        <td>Lucy Morile</td>
                                                        <td>Men's Sweatshirt</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>04</td>
                                                        <td>Jennifer Straight</td>
                                                        <td>Men's Hoodie t-shirt</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-cross">
                                                            <i class="ri-close-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>05</td>
                                                        <td>Kevin Millett</td>
                                                        <td>Outwear & Coats</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>06</td>
                                                        <td>czxc</td>
                                                        <td>Slim Fit Plastic Coat</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-cross">
                                                            <i class="ri-close-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>07</td>
                                                        <td>Kevin Millett</td>
                                                        <td>Men's Sweatshirt</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-cross">
                                                            <i class="ri-close-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>08</td>
                                                        <td>Dillon Bradshaw</td>
                                                        <td>Men's Hoodie t-shirt</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>09</td>
                                                        <td>Lorna Bonner</td>
                                                        <td>Outwear & Coats</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-cross">
                                                            <i class="ri-close-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>10</td>
                                                        <td>Richard Johnson</td>
                                                        <td>Slim Fit Plastic Coat </td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>11</td>
                                                        <td>Lorraine McDowell</td>
                                                        <td>Men's Sweatshirt</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table End -->
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
            <!-- product review section End -->
        </div>
        <!-- Page Body end-->

        <!-- Modal start -->
    @include('back.elements.logoutMessage')
        <!-- Modal end -->
    </div>
    <!-- page-wrapper end-->
    @include('back.elements.importfoot')

</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/product-review.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:45:48 GMT -->
</html>
