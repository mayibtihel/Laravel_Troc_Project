<div class="modal fade custom-modal" id="quickViewProductModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                        <div class="detail-gallery">
                            <span class="zoom-icon"><i class="fi-rs-search"></i></span>


                            <!-- MAIN SLIDES -->
                            <div class="product-image-slider">
                                <figure class="border-radius-10">
                                    <img src="/images/{{ $product->image }}" alt="product image" /> </figure>
                            </div>
                            <!-- THUMBNAILS -->
                        </div>
                        <!-- End Gallery -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="detail-info pr-30 pl-30">
                            <span class="stock-status out-stock"> Sale Off </span>

                            <h3 class="title-detail"><a href="shop-product-right" class="text-heading">{{ $product->name }}</a></h3>

                            <div class="clearfix product-price-cover">
                                <div class="product-price primary-color float-left">
                                    <span class="current-price text-brand">{{ $product->price }} DT</span>
                                </div>
                            </div>

                            <div class="detail-extralink mb-30">
                                <div class="detail-qty border radius">
                              <button href="{{ route('products.getSingleProduct', ['id' => $product->id]) }}" type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>More Details</button>

                                </div>
                                <div class="product-extra-link2">
                                    <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                            <div class="font-xs">
                                <ul>
                                    <li class="mb-5">Vendor: <span class="text-brand">Owner</span></li>
                                    {{--<li class="mb-5">MFG:<span class="text-brand"> Jun 4.2022</span></li>--}}
                                </ul>
                            </div>
                        </div>
                        <!-- Detail Info -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
