@section('title', $itemsArticle['name'])
@extends('news.main')
@section('content')
<main class="main">
   @php
         use  App\Helpers\Template  as Template ;
         use  App\Helpers\URL      as URL ;
         $breadcrumArticle = Template::showBreadcrumArticle(['parent_id' => $itemsArticle['parent_id']]) ;
         $link = URL::linkCategory($itemsArticle['category_id'],$itemsArticle['name']);
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

          <aside class="sidebar col-lg-3">
             <div class="pin-wrapper" style="height: 968px;">
                <div class="sidebar-wrapper sticky-active" style="border-bottom: 0px none rgb(122, 125, 130); width: 270px;">
                   <div class="widget widget-search">
                      <form role="search" method="get" class="search-form" action="#">
                         <input type="search" class="form-control" placeholder="Search posts here..." name="s" required="">
                         <button type="submit" class="search-submit" title="Search">
                         <i class="icon-search"></i>
                         <span class="sr-only">Search</span>
                         </button>
                      </form>
                   </div>
                   <!-- End .widget -->
                   <div class="widget widget-categories">
                      <h4 class="widget-title">Blog Categories</h4>
                      <ul class="list">
                         <li><a href="#">All about clothing</a></li>
                         <li><a href="#">Make-up &amp; beauty</a></li>
                         <li><a href="#">Accessories</a></li>
                         <li><a href="#">Fashion trends</a></li>
                         <li><a href="#">Haircuts &amp; hairstyles</a></li>
                      </ul>
                   </div>
                   <!-- End .widget -->
                   <div class="widget">
                      <h4 class="widget-title">Recent Posts</h4>
                      <ul class="simple-entry-list">
                         <li>
                            <div class="entry-media">
                               <a href="single.html">
                               <img src="assets/images/blog/widget/post-1.jpg" alt="Post">
                               </a>
                            </div>
                            <!-- End .entry-media -->
                            <div class="entry-info">
                               <a href="single.html">Post Format - Video</a>
                               <div class="entry-meta">
                                  April 08, 2018
                               </div>
                               <!-- End .entry-meta -->
                            </div>
                            <!-- End .entry-info -->
                         </li>
                         <li>
                            <div class="entry-media">
                               <a href="single.html">
                               <img src="assets/images/blog/widget/post-2.jpg" alt="Post">
                               </a>
                            </div>
                            <!-- End .entry-media -->
                            <div class="entry-info">
                               <a href="single.html">Post Format - Image</a>
                               <div class="entry-meta">
                                  March 23, 2016
                               </div>
                               <!-- End .entry-meta -->
                            </div>
                            <!-- End .entry-info -->
                         </li>
                      </ul>
                   </div>
                   <!-- End .widget -->
                   <div class="widget">
                      <h4 class="widget-title">Tagcloud</h4>
                      <div class="tagcloud">
                         <a href="#">Fashion</a>
                         <a href="#">Shoes</a>
                         <a href="#">Skirts</a>
                         <a href="#">Dresses</a>
                         <a href="#">Bags</a>
                      </div>
                      <!-- End .tagcloud -->
                   </div>
                   <!-- End .widget -->
                   <div class="widget">
                      <h4 class="widget-title">Archive</h4>
                      <ul class="list">
                         <li><a href="#">April 2018</a></li>
                         <li><a href="#">March 2018</a></li>
                         <li><a href="#">February 2018</a></li>
                      </ul>
                   </div>
                   <!-- End .widget -->
                   <div class="widget widget_compare">
                      <h4 class="widget-title">Compare Products</h4>
                      <p>You have no items to compare.</p>
                   </div>
                   <!-- End .widget -->
                </div>
             </div>
          </aside>
       </div>
    </div>
    <div class="mb-6"></div>
 </main>
@endsection