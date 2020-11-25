<!DOCTYPE html>
<html lang="en">
<head>
    @include('guppy.html.head')
</head>
<body> 
    <div class="page-wrapper">
        <header class="header">
            @include('guppy.html.header-top.index')
            @include('guppy.html.header-menu')
        </header><!-- End .header -->
        <main class="main">
                @yield('content')
        </main><!-- End .main -->
        @include('guppy.html.footer')
    </div><!-- End .page-wrapper -->
        @include('guppy.html.mobile-menu')
        @include('guppy.html.newsletter-popup')
        @include('guppy.html.scroll-top')
        @include('guppy.html.script')
</body>
</html>