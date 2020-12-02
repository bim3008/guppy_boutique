@php       
        $name     = $value['name'] ;
        $price     = number_format($value['price'])." VNĐ" ;
@endphp
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