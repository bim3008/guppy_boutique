@php
    use App\Helpers\URL;
    $id             = $item['id'];
    $name           = $item['name'];
    $price          = number_format($item['price']);
    $linkProduct    = URL::linkProduct($id, $name);
@endphp
<div class="product-details">
    <div class="ratings-container">
        <div class="product-ratings">
        <span class="ratings" style="width:80%"></span>
        </div>
    </div>
    <h2 class="product-title">
    <a href="{{ $linkProduct }}">{{ $name }}</a>
    </h2>
    <div class="price-box">
        <span class="product-price">{{ $price }} / cặp</span>
    </div>
    <div class="product-action">
        {{-- <a href="#" class="paction add-wishlist" title="Add to Wishlist">
        <span>Add to Wishlist</span>
        </a> --}}
        <a href="#" class="paction add-cart" title="Thêm giỏ hàng">
        <span>Thêm vào giỏ hàng</span>
        </a>
        {{-- <a href="#" class="paction add-compare" title="Add to Compare">
        <span>Add to Compare</span>
        </a> --}}
    </div>
</div>