@php
     use App\Helpers\Template as Template;
@endphp
@if(count($articleFeatured) > 0)
    <div class="blog-section">
        <div class="container">
            <h2 class="h3 title text-center">Bài viết nổi bật</h2>
            <div class="blog-carousel owl-carousel owl-theme">

                @foreach ($articleFeatured as $key => $val)
                @php
                    $name        = $val['name'];
                     $content     = Template::showContent($val['content'],140);
                    $thumb       = url("/images/article") . '/' . $val['thumb'];
                @endphp
                <article class="entry">
                    <div class="entry-media">
                        <a href="single.html">
                            <img style="height: 12em" src="{{    $thumb  }}" alt="Post">
                        </a>
                        <div class="entry-date">29<span>Now</span></div><!-- End .entry-date -->
                    </div><!-- End .entry-media -->

                    <div class="entry-body">
                        <h3 class="entry-title">
                            <a href="single.html">{{ $name }}</a>
                        </h3>
                        <div class="entry-content">
                            <p>{!! $content !!}</p>

                            <a href="single.html" class="btn btn-dark">Đọc ngay</a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article>
            @endforeach
               
            </div>
        </div>
    </div>
@endif