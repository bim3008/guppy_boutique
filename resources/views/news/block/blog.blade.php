@php
     use App\Helpers\Template as Template;
     use App\Helpers\URL as URL;
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
                    $link        = URL::linkArticle($val['id'],$val['name']);
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
                            <a href="{{ $link  }}">{{ $name }}</a>
                        </h3>
                        <div class="entry-content">
                            <p>{!! $content !!}</p>

                            <a href="{{ $link  }}" class="btn btn-dark">Đọc ngay</a>
                        </div>
                    </div>
                </article>
            @endforeach
               
            </div>
        </div>
    </div>
@endif