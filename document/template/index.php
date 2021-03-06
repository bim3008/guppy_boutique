<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('elements/head.php')  ;?>
</head>
<body>
    <div class="page-wrapper">
        <header class="header">
            <?php 
                require_once('elements/menu-top.php') ; 
                require_once('elements/menu-middle.php') ; 
                require_once('elements/menu.php') ;      
            ?>
        </header>
        <main class="main">
            <?php
                require_once('block/slider.php') ;
                require_once('block/service.php') ;
                require_once('block/banner-top.php') ;
                require_once('block/featured.php') ;
                require_once('block/new-arrivals.php') ;
                require_once('block/feedback.php') ;
                require_once('block/banner-bottom.php') ;
                require_once('block/gallery.php') ;
                require_once('block/blog.php') ;
            ?>                               
        </main><!-- End .main -->
        <footer class="footer">
                <?php require_once('elements/footer.php') ;?>
        </footer>

    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <?php require_once('elements/mobile.php') ;?>
    <?php require_once('elements/newsletter.php') ;?>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <?php require_once('elements/script.php') ; ?>
</body>
</html>