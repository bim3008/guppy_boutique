
@extends('news.main')
@section('content')
<main class="main">
   @include('news.pages.product.childs.breadcrumb')
   <div class="container">
       <div class="row">
           <div class="col-lg-9">
               <div class="product-single-container product-single-default">
                   <div class="row">
                        @include('news.pages.product.child-product-detail.image')
                        @include('news.pages.product.child-product-detail.content')
                   </div><!-- End .row -->
               </div><!-- End .product-single-container -->

               <div class="product-single-tabs">
                  @include('news.pages.product.child-product-detail.tab_title')
                  @include('news.pages.product.child-product-detail.tab_content')
               </div><!-- End .product-single-tabs -->
           </div><!-- End .col-lg-9 -->

           <div class="sidebar-overlay"></div>
           <div class="sidebar-toggle"><i class="icon-sliders"></i></div>
           <aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
               <div class="sidebar-wrapper">
                     @include('news.pages.product.child-product-detail.right_category')
                     @include('news.pages.product.child-product-detail.right_banner')
                     @include('news.pages.product.child-product-detail.right_product')
               </div>
           </aside><!-- End .col-md-3 -->
       </div><!-- End .row -->
         @include('news.pages.product.child-product-detail.product_feature')
      
       <div class="mb-lg-4"></div><!-- margin -->
   </div><!-- End .container -->
</main><!-- End .main -->
@endsection