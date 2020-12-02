
@section('title', $params['category_name'])
@extends('news.main')
@section('content')
<main class="main">
   <nav aria-label="breadcrumb" class="breadcrumb-nav">
        @php
        use  App\Helpers\Template  as Template ;
            $breadcrumCategory = Template::showBreadcrumArticle(['parent_id' => $params['category_id']]) ;
            
        @endphp
       <div class="container">
           <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                {!! $breadcrumCategory !!}
           </ol>
       </div><!-- End .container -->
   </nav>

   <div class="container">
       <div class="row">
           <div class="col-lg-9">
               <article class="entry">
                   @if(count($itemsArticleInCategory) > 0) 
                        @foreach($itemsArticleInCategory as $key => $value)
                            @include('news.pages.category.child-index.image'   , ['items' => $value])
                            @include('news.pages.category.child-index.content' , ['items' => $value])
                        @endforeach
                   @endif
               </article><!-- End .entry -->
           </div>
       </div>

   <div class="mb-6"></div><!-- margin -->
</main>
@endsection