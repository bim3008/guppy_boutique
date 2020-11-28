@php
        
    @endphp
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
                            {{-- <div class="slide-border-top">
                                <img src="assets/images/slider/border-top.png" alt="Border" width="290" height="38">
                            </div> --}}
                            {{-- <h3>{{ $name }}</h3>
                            <h1>fashion mega sale</h1> --}}
                            {{-- <a href="{{ $link }}" class="btn btn-primary">Shop Now</a> --}}
                            {{-- <div class="slide-border-bottom">
                                <img src="" alt="Border" width="290" height="111">
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach
           

          
        </div>
    </div>
@endif