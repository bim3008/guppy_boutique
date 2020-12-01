
@if(count($productAccessory) > 0)
    <div class="featured-products-section carousel-section">
        <div class="container">
        <h2 class="h3 title mb-4 text-center">Phụ kiện bán chạy</h2>
        <div class="featured-products owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1418px;">
                        @foreach($productAccessory as $key => $value)
                            @php
                                    $name   = $value['name'] ;
                                    $price  = number_format($value['price'])." VNĐ" ;
                            @endphp
                            <div class="owl-item active" style="width: 225.2px; margin-right: 11px;">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="assets/images/products/product-10-white.jpg" alt="product">
                                        </a>
                                        {{-- <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a> --}}
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div>
                                        </div>
                                        <h2 class="product-title">
                                            <a href="product.html">{{ $name }}</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">{{ $price }}</span>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                            </a>
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                            </a>
                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-nav disabled">
                <button type="button" role="presentation" class="owl-prev"><i class="icon-left-open-big"></i></button>
                <button type="button" role="presentation" class="owl-next"><i class="icon-right-open-big"></i></button>
                </div>
        </div>
        </div>
    </div>     
@endif