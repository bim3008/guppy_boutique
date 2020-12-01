@php
    use App\Helpers\Template;
    $name                       = $item['name'];
    $price                      = number_format($item['price']) . ' VNĐ';
    $linkYoutube                = $item['link'];
    $content                    = mb_substr($item['content'],1, 500);
    $tags                       = $item['tags'];
    $active                     =   null;
    $attributeNamePriceCustom   = $item['attribute_name_price_custom'];
    // SHOW THUỘC TÍNH KHÔNG THAY ĐỔI GIÁ
    if (isset($item['attribute']) && $item['attribute_name_price_custom'] == null) {
        $attributes           =   json_decode($item['attribute'], true);
    }
    // SHOW THUỘC TÍNH CÓ THAY ĐỔI GIÁ
    if (isset($item['price_custom']) && $item['price_custom'] !== null && $item['attribute'] == null) {
        $attrChangePrice            = json_decode($item['price_custom'], true);
        $nameAttr                   = json_decode($attrChangePrice['name'], true);
        $valueAttr                  = json_decode($attrChangePrice['value'], true);
        $resultAttr                 = array_combine($nameAttr, $valueAttr);
    }
@endphp
<div class="col-lg-5 col-md-6">
    <div class="product-single-details">
    <h1 class="product-title">{{ $name }}</h1>
        <div class="ratings-container">
            <div class="product-ratings">
                <span class="ratings" style="width:60%"></span>
            </div>
            {{-- <a href="#" class="rating-link">( 6 Reviews )</a> --}}
        </div>

        <div class="price-box">
            <span class="old-price">{{ $price }}</span>
            <span class="product-price">{{ $price }}</span>
        </div><!-- End .price-box -->

        <div class="product-desc">
            {!! $content !!}
        </div><!-- End .product-desc -->

        <div class="product-filters-container">
            <div class="product-single-filter">
                @if (isset($item['price_custom']) && $item['price_custom'] !== null && $item['attribute'] == null)
                    <label>{!! $attributeNamePriceCustom !!}</label>
                    <ul class="config-size-list">
                        @foreach ($resultAttr as $key => $value)
                        <li class="{{ $active }}"><a href="#">{{ $key }}</a></li>
                        @endforeach
                    </ul>
                @elseif(isset($item['attribute']) && $item['attribute_name_price_custom'] == null)
                    @foreach ($attributes as $value)
                        @php
                            $name            = Template::showNameAttribute($value['name']);
                            $arrAtribute     = $value['value'];
                        @endphp
                        <ul class="config-size-list">
                            <label>{!! $name !!}</label>
                                @foreach ($arrAtribute as  $value)
                                <li class="{{ $active }}"><a href="#">{{ $value }}</a></li>
                                @endforeach
                        </ul><br>
                    @endforeach
                @endif
               
            </div>
        </div>

        <div class="product-action">
            <div class="product-single-qty">
                <input class="horizontal-quantity form-control" type="text">
            </div><!-- End .product-single-qty -->

            <a href="cart.html" class="paction add-cart" title="Thêm vào giỏ hàng">
                <span>Thêm vào giỏ hàng</span>
            </a>
            
            {{-- <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                <span>Add to Wishlist</span>
            </a> --}}
        </div><!-- End .product-action -->

        <div class="product-single-share">
            <label>Share:</label>
            <!-- www.addthis.com share plugin-->
            <div class="addthis_inline_share_toolbox"></div>
        </div><!-- End .product single-share -->
    </div><!-- End .product-single-details -->
</div><!-- End .col-lg-5 -->