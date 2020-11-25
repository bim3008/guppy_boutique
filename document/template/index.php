<!DOCTYPE html>
<html lang="en">
<head>
    <?php  require_once('elements/head.php'); ?>
</head>
<body>
    <div class="page-wrapper">
        <header class="header">
            <!-- HEADER-TOP -->
            <?php require_once('elements/header-top.php') ;?> 
            <div class="header-middle">
                <div class="container">
                    <!-- LOGO -->
                    <?php require_once('elements/logo.php') ;?>
                    <!-- SEARCH -->
                    <?php require_once('elements/search.php') ;?>                    

                    <div class="header-right">
                        <?php require_once('elements/phone.php') ;?>   
                        <?php require_once('elements/cart.php') ;?>   
                    </div>
                </div>
            </div>
            <!-- MENU -->
            <?php require_once('elements/menu.php') ;?>
        </header>

        <main class="main">
            <div class="home-top-container">
                <div class="container">
                    <div class="row">
                        <?php require_once('block/slider.php') ;?>
                        <?php require_once('block/category.php') ;?>
                    </div>
                </div>
            </div>
            <!-- POLICY -->
            <?php require_once('block/policy.php'); ?>
            <!-- BANNER -->
            <?php require_once('block/banner.php'); ?>
            <div class="mb-4"></div><!-- margin -->

            <!-- PRODUCT FEATURES -->
            <?php require_once('block/product-features.php'); ?>
        </main>
        <?php require_once('elements/footer.php') ; ?>
    </div>

    <?php require_once('elements/mobile.php') ; ?>
    <?php require_once('elements/newsletter.php') ; ?>
    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
    <?php require_once('elements/script.php') ; ?>
  
</body>
</html>