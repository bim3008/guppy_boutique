@php
    $thumb   = asset('uploads/' . json_decode($item['thumb'])[0]);
@endphp
<figure class="product-image-container">
    <a href="product.html" class="product-image">
    <img src="{{ $thumb }}" alt="product" style="width: 180px; height:150px">
    </a>
</figure>