@section('title', 'Trang chủ')
@extends('news.main')
@section('content')
    
    <main class="main">
        @include('news.block.slider')       
        @include('news.block.service')       
        @include('news.block.gallery')
        @include('news.block.productFeatured')
        @include('news.block.productAccessory')
        @include('news.block.feedback')       
        @include('news.block.blog')       
    </main> 
@endsection