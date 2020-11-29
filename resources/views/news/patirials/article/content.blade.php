@php
    use App\Helpers\Template as Template ;

    $name       = $item['name'];
    $content    = $item['content'];
    $created    = Template::showDatetimeFrontend($item['created']);
    $created_by = $item['created_by'];

@endphp
<div class="entry-body">
    <div class="entry-date">
    <span class="day">22</span>
    <span class="month">Jun</span>
    </div>

    <h2 class="entry-title"> {{ $name }}</h2>
    <div class="entry-meta">
    <span><i class="icon-calendar"></i>{{ $created }}</span>
    <span><i class="icon-user"></i>By <a href="#">{{ $created_by }}</a></span>
        {{-- <span><i class="icon-folder-open"></i>
            <a href="#">Haircuts &amp; hairstyles</a>,
            <a href="#">Fashion trends</a>,
            <a href="#">Accessories</a>
        </span> --}}
    </div>

    <div class="entry-content" >
        {!! $content  !!}
    </div>



</div>
