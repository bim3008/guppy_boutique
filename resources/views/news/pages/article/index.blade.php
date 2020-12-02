@section('title', $itemsArticle['name'])
@extends('news.main')
@section('content')
<main class="main">
   @php
         use  App\Helpers\Template  as Template ;
         use  App\Helpers\URL      as URL ;
         $breadcrumArticle = Template::showBreadcrumArticle(['parent_id' => $itemsArticle['parent_id']]) ;
         $link = URL::linkCategoryArticle($itemsArticle['category_id'],$itemsArticle['name']);
   @endphp
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
       <div class="container">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
             {!! $breadcrumArticle !!}<li class="breadcrumb-item"><a href="{{ $link }}">{{ $itemsArticle['category_name'] }}</a></li><li class="breadcrumb-item">{{ $itemsArticle['name'] }}</li>
          </ol>
       </div>
       <!-- End .container -->
    </nav>
    <div class="container">   
       <div class="row">
         <div class="col-lg-9">
            <article class="entry single">
                  @if(count($itemsArticle) > 0)
                     @include('news.pages.article.child-index.article', [ 'items' => $itemsArticle ]  )
                  @endif
            </article>
            @if(count($itemsArticle) > 0)
                  @include('news.pages.article.child-index.related',     [ 'items' => $itemsArticle ] )
            @endif
                  
         </div>
         @include('news.pages.article.child-index.right')
          
       </div>
    </div>
    <div class="mb-6"></div>
 </main>
@endsection