
@if (count($itemsSlider) > 0) 
    <div class="home-slider-container">
        <div class="home-slider owl-carousel owl-theme owl-theme-light">

            @foreach ($itemsSlider as $key => $val)
                @php
                    $name        = $val['name'];
                    $description = $val['description'];
                    $link        = $val['link'];
                    $thumb       = url("/images/slider") . '/' . $val['thumb'];
                @endphp
                <div class="home-slide">
                    <div class="slide-bg owl-lazy"  data-src="{{ $thumb }}"></div><!-- End .slide-bg -->
                    <div class="container">
                        <div class="home-slide-content">
                            {{-- <h3>{!! $name !!}</h3> --}}
                          
                        </div>
                    </div>
                </div>
            @endforeach
           

          
        </div>
    </div>
@endif