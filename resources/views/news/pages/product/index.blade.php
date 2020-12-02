@extends('news.main')
@section('content')
<main class="main">
   <main class="main">
        @include('news.pages.product.childs.breadcrumb')
      <div class="container">
         <nav class="toolbox">
            @include('news.pages.product.childs.filter')
            @include('news.pages.product.childs.count')
            {{-- @include('news.pages.product.childs.icon_list_grid') --}}
         </nav>
            @include('news.pages.product.childs.product')
         @include('news.pages.product.childs.pagination')
      </div>
      <div class="mb-5"></div>
   </main>
</main>
@endsection