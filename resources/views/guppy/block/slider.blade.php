
<div class="home-slider-container">
    <div class="home-slider owl-carousel owl-theme owl-theme-light">
        @if(count($itemsSlider) > 0)
            @foreach($itemsSlider as $key => $value)
                @php
                    $name        = $value['name'];
                    $description = $value['description'];
                    $link        = $value['link'];
                    $thumb       = url("/images/slider") . '/' . $value['thumb'];
                @endphp
                <div class="home-slide">
                    <div class="slide-bg owl-lazy" data-src="{{ $thumb }}"></div>
                    {{-- <div class="container">
                        <div class="home-slide-content slide-content-box">
                            <h3>Professional</h3>
                            <h1>cosmetics</h1>
                            <h2><span>70%</span> off</h2>
                            <a href="category.html" class="btn btn-primary">Shop Now</a>
                            <img src="{{ asset('guppy/assets/images/slider/item-1.png') }}" class="slide-item-img slide-img-1" alt="item" width="123" height="153">
                            <img src="{{ asset('guppy/assets/images/slider/item-2.png') }}" class="slide-item-img slide-img-2" alt="item" width="144" height="241"> 
                        </div>
                    </div> --}}
                </div>

            @endforeach
        @endif
       
        {{-- <div class="home-slide text-center">
            <div class="slide-bg owl-lazy" data-src="{{ asset('guppy/assets/images/slider/slide-2.jpg') }}"></div><!-- End .slide-bg -->
            <div class="container">
                <div class="home-slide-content slide-content-big">
                    <h3>mega special</h3>
                    <h1>cosmetics sale</h1>
                    <h2><span>50%</span> off</h2>
                    <a href="category.html" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div> --}}

    </div>
</div>