@php
   $item = json_decode($itemsSetting['value']);
   $logo = ("/images/setting") . '/' . $item->logo ;
@endphp
<div class="header-middle sticky-header">
    <div class="container">
        <div class="header-left">
            <ul class="menu sf-arrows">
                @php 
                    $xhtml = null;
                    foreach ($itemsMenu as $itemMenu) {
                        $xhtml .= sprintf('<li class="active"><a href="#">%s</a></li>', $itemMenu['name']);
                    }
                @endphp
                {!! $xhtml !!}
                {{-- <li class="active"><a href="index.html">Home</a></li>
                <li>
                    <a href="category.html" class="sf-with-ul">Categories</a>
                    <div class="megamenu megamenu-fixed-width">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="menu-title">
                                            <a href="#">Variations 1<span class="tip tip-new">New!</span></a>
                                        </div>
                                        <ul>
                                            <li><a href="category-banner-full-width.html">Fullwidth Banner<span class="tip tip-hot">Hot!</span></a></li>
                                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                            <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                                            <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                            <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                        </ul>
                                    </div><!-- End .col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="menu-title">
                                            <a href="#">Variations 2</a>
                                        </div>
                                        <ul>
                                            <li><a href="#">Product List Item Types</a></li>
                                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                            <li><a href="category-3col.html">3 Columns Products</a></li>
                                            <li><a href="category-4col.html">4 Columns Products <span class="tip tip-new">New</span></a></li>
                                            <li><a href="category-5col.html">5 Columns Products</a></li>
                                            <li><a href="category-6col.html">6 Columns Products</a></li>
                                            <li><a href="category-7col.html">7 Columns Products</a></li>
                                            <li><a href="category-8col.html">8 Columns Products</a></li>
                                        </ul>
                                    </div><!-- End .col-lg-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .col-lg-8 -->
                            <div class="col-lg-4">
                                <div class="banner">
                                    <a href="#">
                                        <img src=" {{ asset('guppy/assets/images/menu-banner-2.jpg') }}" alt="Menu banner">
                                    </a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-lg-4 -->
                        </div>
                    </div><!-- End .megamenu -->
                </li>
                <li class="megamenu-container">
                    <a href="product.html" class="sf-with-ul">Products</a>
                    <div class="megamenu">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-title">
                                            <a href="#">Variations</a>
                                        </div>
                                        <ul>
                                            <li><a href="product.html">Horizontal Thumbnails</a></li>
                                            <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                            <li><a href="product.html">Inner Zoom</a></li>
                                            <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                            <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                        </ul>
                                    </div><!-- End .col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="menu-title">
                                            <a href="#">Variations</a>
                                        </div>
                                        <ul>
                                            <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                            <li><a href="product-simple.html">Simple Product</a></li>
                                            <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                        </ul>
                                    </div><!-- End .col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="menu-title">
                                            <a href="#">Product Layout Types</a>
                                        </div>
                                        <ul>
                                            <li><a href="product.html">Default Layout</a></li>
                                            <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                            <li><a href="product-full-width.html">Full Width Layout</a></li>
                                            <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                            <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                            <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                        </ul>
                                    </div><!-- End .col-lg-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .col-lg-8 -->
                            <div class="col-lg-4">
                                <div class="banner">
                                    <a href="#">
                                        <img src=" {{ asset('guppy/assets/images/menu-banner.jpg') }}" alt="Menu banner" class="product-promo">
                                    </a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-lg-4 -->
                        </div><!-- End .row -->
                    </div><!-- End .megamenu -->
                </li>
                <li>
                    <a href="#" class="sf-with-ul">Pages</a>

                    <ul>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li><a href="#">Checkout</a>
                            <ul>
                                <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                <li><a href="checkout-review.html">Checkout Review</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dashboard</a>
                            <ul>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single.html">Blog Post</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#" class="login-link">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
        <div class="header-center">
            <a href="{{ route('home') }}" class="logo">
                <img style="withd:50px; height:50px" src="{{ $logo }}" alt="Porto Logo">
            </a>
        </div>

        <div class="header-right">
            <ul class="menu sf-arrows">
                <li>
                    <a href="#" class="sf-with-ul">Features</a>
                    
                    <ul>
                        <li><a href="#">Header Types</a></li>
                        <li><a href="#">Footer Types</a></li>
                        <li><a href="#">Homepage Variants</a></li>
                    </ul>
                </li>
                <li><a href="#">Special Offer!</a></li>
                <li><a href="#">Buy Porto!</a></li>
            </ul>

            <button class="mobile-menu-toggler" type="button">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
</div>