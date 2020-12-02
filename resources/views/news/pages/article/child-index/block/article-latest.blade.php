{{-- @php
echo '<pre>';
print_r($articleLastest);
echo '</pre>';
@endphp --}}
<div class="widget widget-featured">
    <h3 class="widget-title">Bài viết gần nhất</h3>
    <div class="widget-body">
       <div class="owl-carousel widget-featured-products owl-loaded owl-drag">
          <!-- End .featured-col -->
          <!-- End .featured-col -->
          <div class="owl-stage-outer owl-height" style="height: 254px;">
             <div class="owl-stage" style="transform: translate3d(-456px, 0px, 0px); transition: all 0.25s ease 0s; width: 1368px;">
                <div class="owl-item cloned" style="width: 228px;">
                   <div class="featured-col">
                      <div class="product product-sm">
                        @foreach($articleLastest as $key => $value)
                            @include('news.patirials.product.image', ['pageIndex' => 'artilce-lastest']) 
                            <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">Ring</a>
                            </h2>
                            </div>
                            <div class="entry-meta"> March 23, 2016 </div>
                        @endforeach
                           
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button></div>
          <div class="owl-dots disabled"></div>
       </div>
    </div>
</div>