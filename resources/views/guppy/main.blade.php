<!DOCTYPE html>
<html lang="en">
<head>
    @include('guppy.html.head')
</head>
<body>
    <div class="page-wrapper">
        <header class="header">
            @include('guppy.html.header-top')
            @include('guppy.html.header-menu')
        </header><!-- End .header -->
        <main class="main">
                @include('guppy.elements.slider')
               {{-- include 'elements/product-1.php';
                 include 'elements/partners.php';
                 include 'elements/product-2.php'; --}}
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