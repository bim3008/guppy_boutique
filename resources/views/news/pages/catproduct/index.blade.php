{{-- @section('title', $productInCate[0]['cate_pro_name']) --}}
@section('title', 'Sản phẩm')
@extends('news.main')
@section('content')
    
<main class="main">
    @php
        use  App\Helpers\Template  as Template ;
        $breadcrumCategory = Template::showBreadcrumProduct(['parent_id' => $params['id']]) ;
  
    @endphp
    <nav aria-label="breadcrumb" class="top-nav breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb mt-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                {!! $breadcrumCategory !!}
            </ol>
        </div>

    <div class="container">
        {{-- <nav class="toolbox">
            <div class="toolbox-left">
                <div class="toolbox-item toolbox-sort">
                    <div class="select-custom">
                        <select name="orderby" class="form-control">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </div><!-- End .select-custom -->

                </div><!-- End .toolbox-item -->
            </div><!-- End .toolbox-left -->

            <div class="toolbox-item toolbox-show">
                    <label>Showing 1–9 of 60 results</label>
                </div><!-- End .toolbox-item -->

            <div class="layout-modes">
                <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                    <i class="icon-mode-grid"></i>
                </a>
                <a href="category-list.html" class="layout-btn btn-list" title="List">
                    <i class="icon-mode-list"></i>
                </a>
            </div><!-- End .layout-modes -->
        </nav> --}}
        <div class="row row-sm">
            @foreach($items as $key => $value)
                @php
                    $arrThumb = json_decode($value['thumb']);
                    $name     = $value['name'];
                    $price    = number_format($value['price']) . " VNĐ" ;
                    $thumb  = url("/uploads") . '/' .  $arrThumb[0];
                @endphp
                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="{{ $thumb }}" alt="product">
                            </a>
                            {{-- <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a> --}}
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">{{ $name }}</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">{{ $price }}</span>
                            </div><!-- End .price-box -->

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
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->
                </div>
            @endforeach
        </div>    


        @if (count($items) > 0)
            <nav class="toolbox toolbox-pagination">
                @include('news.templates.pagination')
            </nav>  
        @endif

       
    </div>

    <div class="mb-5"></div>
</main>
@endsection






{{-- <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
    <div class="product">
        <figure class="product-image-container">
            <a href="product.html" class="product-image">
                <img src="assets/images/products/product-2.jpg" alt="product">
            </a>
            <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
            <span class="product-label label-sale">-20%</span>
            <span class="product-label label-hot">New</span>
        </figure>
        <div class="product-details">
            <div class="ratings-container">
                <div class="product-ratings">
                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                </div><!-- End .product-ratings -->
            </div><!-- End .product-container -->
            <h2 class="product-title">
                <a href="product.html">Zippered Jacket</a>
            </h2>
            <div class="price-box">
                <span class="old-price">$60.00</span>
                <span class="product-price">$48.00</span>
            </div><!-- End .price-box -->

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
            </div><!-- End .product-action -->
        </div><!-- End .product-details -->
    </div><!-- End .product -->
</div><!-- End .col-lg-3 --> --}}

{{-- <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
    <div class="product">
        <figure class="product-image-container">
            <a href="product.html" class="product-image">
                <img src="assets/images/products/product-6.jpg" alt="product">
            </a>
            <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
            <span class="product-label label-hot">Hot</span>
        </figure>
        <div class="product-details">
            <div class="ratings-container">
                <div class="product-ratings">
                    <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                </div><!-- End .product-ratings -->
            </div><!-- End .product-container -->
            <h2 class="product-title">
                <a href="product.html">Cotton Sweatshirt</a>
            </h2>
            <div class="price-box">
                <span class="product-price">$67.00</span>
            </div><!-- End .price-box -->

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
            </div><!-- End .product-action -->
        </div><!-- End .product-details -->
    </div><!-- End .product -->
</div><!-- End .col-lg-3 --> --}}