<!DOCTYPE html>
<html lang="en">
    <?php require_once ('html/head.php'); ?>
<body>
    <div class="page-wrapper">
        <header class="header">
            <?php 
                require_once ('html/header-top.php'); 
                require_once ('html/menu.php'); 
            ?>
        </header>

        <main class="main">
            <?php 
                require_once ('elements/slider.php'); 
                require_once ('elements/product.php'); 
                require_once ('elements/slider-after-product.php'); 
            ?>
        </main>

        <footer class="footer">
            <?php 
                require_once ('html/footer-top.php'); 
                require_once ('html/footer-main.php'); 
                require_once ('html/copy-right.php'); 
            ?>
        </footer>
    </div><!-- End .page-wrapper -->
    <a id="scroll-top" href="#top" title="Top" role="button"><i class="fa fa-arrow-up"></i></a>
    <?php require_once ('html/script.php'); ?>
</body>
</html>