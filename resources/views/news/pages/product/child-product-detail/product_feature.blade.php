<div class="featured-section pt-sm bg-white">
    <h2 class="carousel-title">Sản phẩm nổi bật</h2>
    <div class="featured-products owl-carousel owl-theme owl-dots-top">
        @foreach ($itemsFeatured as $item)
        <div class="product">
            @include('news.patirials.product.image',    ['item' => $item])
            @include('news.patirials.product.content',  ['item' => $item])
        </div><!-- End .product -->
        @endforeach
    </div><!-- End .featured-proucts -->
</div><!-- End .featured-section -->
