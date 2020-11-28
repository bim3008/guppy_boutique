@extends('news.main')
@section('content')
    
    <main class="main">
        @include('news.block.slider')       
        @include('news.block.service')       
        @include('news.block.gallery')       
        @include('news.block.feedback')       
    </main> 
@endsection