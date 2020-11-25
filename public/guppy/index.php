<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'html/head.php' ?>
</head>
<body>
    <div class="page-wrapper">
        <header class="header">
            <?php 
                include 'html/header-top.php';
                include 'html/header-menu.php';
            ?>
        </header><!-- End .header -->
        <main class="main">
            <?php 
                include 'elements/slider.php';
                include 'elements/product-1.php';
                include 'elements/partners.php';
                include 'elements/product-2.php';
            ?>
        </main><!-- End .main -->
        <?php include 'html/footer.php' ?>
    </div><!-- End .page-wrapper -->
    <?php 
        include 'html/mobile-menu.php'; 
        include 'html/newsletter-popup.php'; 
        include 'html/scroll-top.php';
        include 'html/script.php'; 
    ?>
</body>
</html>