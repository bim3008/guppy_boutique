@extends('news.main')
@section('content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
       <div class="container">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
             <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
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
            <div class="related-posts">
            <h4 class="light-title">Related <strong>Posts</strong></h4>
            <div class="owl-carousel owl-theme related-posts-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1200px;">
                        <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                        <article class="entry">
                            <div class="entry-media">
                                <a href="single.html">
                                <img src="assets/images/blog/related/post-1.jpg" alt="Post">
                                </a>
                            </div>
                            <!-- End .entry-media -->
                            <div class="entry-body">
                                <div class="entry-date">
                                    <span class="day">29</span>
                                    <span class="month">Jun</span>
                                </div>
                                <!-- End .entry-date -->
                                <h2 class="entry-title">
                                    <a href="single.html">Post Format - Image</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>
                                    <a href="single.html" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
                                </div>
                                <!-- End .entry-content -->
                            </div>
                            <!-- End .entry-body -->
                        </article>
                        </div>
                        <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                        <article class="entry">
                            <div class="entry-media">
                                <a href="single.html">
                                <img src="assets/images/blog/related/post-2.jpg" alt="Post">
                                </a>
                            </div>
                            <!-- End .entry-media -->
                            <div class="entry-body">
                                <div class="entry-date">
                                    <span class="day">23</span>
                                    <span class="month">Mar</span>
                                </div>
                                <!-- End .entry-date -->
                                <h2 class="entry-title">
                                    <a href="single.html">Post Format - Image</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>
                                    <a href="single.html" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
                                </div>
                                <!-- End .entry-content -->
                            </div>
                            <!-- End .entry-body -->
                        </article>
                        </div>
                        <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                        <article class="entry">
                            <div class="entry-media">
                                <a href="single.html">
                                <img src="assets/images/blog/related/post-3.jpg" alt="Post">
                                </a>
                            </div>
                            <!-- End .entry-media -->
                            <div class="entry-body">
                                <div class="entry-date">
                                    <span class="day">14</span>
                                    <span class="month">May</span>
                                </div>
                                <!-- End .entry-date -->
                                <h2 class="entry-title">
                                    <a href="single.html">Post Format - Image</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>
                                    <a href="single.html" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
                                </div>
                                <!-- End .entry-content -->
                            </div>
                            <!-- End .entry-body -->
                        </article>
                        </div>
                        <div class="owl-item" style="width: 270px; margin-right: 30px;">
                        <article class="entry">
                            <div class="entry-media">
                                <a href="single.html">
                                <img src="assets/images/blog/related/post-1.jpg" alt="Post">
                                </a>
                            </div>
                            <!-- End .entry-media -->
                            <div class="entry-body">
                                <div class="entry-date">
                                    <span class="day">11</span>
                                    <span class="month">Apr</span>
                                </div>
                                <!-- End .entry-date -->
                                <h2 class="entry-title">
                                    <a href="single.html">Post Format - Image</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>
                                    <a href="single.html" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
                                </div>
                                <!-- End .entry-content -->
                            </div>
                            <!-- End .entry-body -->
                        </article>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="icon-left-open-big"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-right-open-big"></i></button></div>
            </div>
            </div>
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