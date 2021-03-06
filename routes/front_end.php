<?php
$prefixNews  = config('zvn.url.prefix_news');
Route::group(['prefix' => '', 'namespace' => 'news'], function () {

// ============================= HOMEPAGE ==============================
   $prefix         = '';
   $controllerName = 'home';
   Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
      $controller = ucfirst($controllerName)  . 'Controller@';
      Route::get('/',          [ 'as' => $controllerName,                'uses' => $controller . 'index' ]);
      Route::get('/not-found', [ 'as' => $controllerName . '/notFound',  'uses' => $controller . 'notFound' ]);
   });
//============================== INTRO    ==============================
   $prefix         = 'gioi-thieu';
   $controllerName = 'intro';
   Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
      $controller = ucfirst($controllerName)  . 'Controller@';
      Route::get('/',   [ 'as' => $controllerName.'news',                'uses' => $controller . 'index' ]);
   }); 

   // ============================== PRODUCT ==============================
$prefix         = 'tat-ca-san-pham';
$controllerName = 'productf';
Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
   $controller = ucfirst($controllerName)  . 'Controller@';
   Route::get('/',          [ 'as' => $controllerName,                'uses' => $controller . 'index' ]);
   Route::get('/{product_name}-{product_id}.html', [ 'as' => $controllerName . '/detail',  'uses' => $controller . 'detail' ])
            ->where('product_name', '[0-9a-zA-Z_-]+')
            ->where('product_id', '[0-9]+');
   Route::get('/not-found', [ 'as' => $controllerName . '/notFound',  'uses' => $controller . 'notFound' ]);
});
  // ============================== CONTACT ==============================
  $prefix         = 'lien-he';
  $controllerName = 'contactf';
  Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
      $controller = ucfirst($controllerName)  . 'Controller@';
      Route::get('/',           [ 'as' => $controllerName ,                     'uses' => $controller . 'index' ]);
      Route::post('/postContact',      [ 'as' => $controllerName . '/postContact',     'uses' => $controller . 'postContact' ]);
  });
// ============================= ARTICLE ===============================
   $prefix         = '';
   $controllerName = 'article';
   Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
       $controller = ucfirst($controllerName)  . 'Controller@';
       Route::get('/{article_name}-a-{article_id}.html',  [ 'as' => $controllerName . '/index', 'uses' => $controller . 'index' ])
               ->where('article_name', '[0-9a-zA-Z_-]+')
               ->where('article_id', '[0-9]+');
   });

//============================== CATEGORY - ARTICLE ====================
   $prefix         = '';
   $controllerName = 'category';
   Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
       $controller = ucfirst($controllerName)  . 'Controller@';
       Route::get('/{category_name}-ca-{category_id}.html',  [ 'as' => $controllerName . '/index', 'uses' => $controller . 'index' ])
           ->where('category_name', '[0-9a-zA-Z_-]+')
           ->where('category_id', '[0-9]+');
   }); 

//============================== CATEGORY - PRODUCT ====================
   $prefix         = '';
   $controllerName = 'catProduct';
   Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
      $controller = ucfirst($controllerName)  . 'Controller@';
      Route::get('/{cat_pro_name}-cp-{cat_pro_id}.html',  [ 'as' => $controllerName . '/index', 'uses' => $controller . 'index' ])
         ->where('cat_pro_name', '[0-9a-zA-Z_-]+')
         ->where('cat_pro_id', '[0-9]+');
}); 
  




   // ============================== CATEGORY - PRODUCT ==============================
//    $prefix         = 'san-pham';
//    $controllerName = 'frontEndCategoryProduct';
//    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
//        $controller = ucfirst($controllerName)  . 'Controller@';
//        Route::get('/{category_product_name}-{category_product_id}.html',  [ 'as' => $controllerName , 'uses' => $controller . 'index' ])
//            ->where('category_product_name', '[0-9a-zA-Z_-]+')
//            ->where('category_product_id', '[0-9]+');
//    });



   // ====================== RSS ========================
//    $prefix         = 'rss';
//    $controllerName = 'rssfe';
//    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
//        $controller = ucfirst($controllerName)  . 'Controller@';
//        Route::get('/',                  [ 'as' => $controllerName,  'uses' => $controller . 'index' ]);
//        Route::get('getGold',            [ 'as' => $controllerName . '/getGold',  'uses' => $controller . 'getGold' ]);
//        Route::get('getCoin',            [ 'as' => $controllerName . '/getCoin',  'uses' => $controller . 'getCoin' ]);
//    });

   // ============================== NOTIFY ==============================
//    $prefix         = '';
//    $controllerName = 'notify';
//    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
//        $controller = ucfirst($controllerName)  . 'Controller@';
//        Route::get('/no-permission',                             [ 'as' => $controllerName . '/noPermission',                  'uses' => $controller . 'noPermission' ]);
//    });

   // ====================== LOGIN ========================
   // news69/login
//    $prefix         = '';
//    $controllerName = 'auth';
   
//    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
//     $controller = ucfirst($controllerName)  . 'Controller@';
//     //  Route::get('/login',        ['as' => $controllerName.'/login',      'uses' => $controller . 'login']);
//     Route::get('/login',          ['as' => $controllerName.'/login',      'uses' => $controller . 'login'])->middleware('check.login');
//     Route::post('/postLogin',     ['as' => $controllerName.'/postLogin',  'uses' => $controller . 'postLogin']);
//     Route::get('/changePassword',  ['as' => $controllerName.'/changePassword',   'uses' => $controller . 'changePassword']);
//     Route::post('/postChangePassword',      ['as' => $controllerName.'/postChangePassword',       'uses' => $controller . 'postChangePassword']);
//     // ====================== LOGOUT ========================
//     Route::get('/logout',       ['as' => $controllerName.'/logout',     'uses' => $controller . 'logout']);
//    });

   // ============================== CONTACT ==============================
//    $prefix         = 'lien-he';
//    $controllerName = 'contact';
//    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
//        $controller = ucfirst($controllerName)  . 'Controller@';
//        Route::get('/contact',           [ 'as' => $controllerName ,                     'uses' => $controller . 'index' ]);
//        Route::post('/postContact',      [ 'as' => $controllerName . '/postContact',     'uses' => $controller . 'postContact' ]);
//    });

   //==========================PRODUCT DETAIL==========================
//     $prefix         = '';
//     $controllerName = 'productFrontEnd';
//     Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
//         $controller = ucfirst($controllerName)  . 'Controller@';
//         Route::get('/{product_name}-{product_id}.html',  [ 'as' => $controllerName ,  'uses' => $controller . 'index' ]) 
//         ->where('product_name', '[0-9a-zA-Z_-]+')
//         ->where('product_id', '[0-9]+');
//    });

    //=============================== ORDER ======================
    // $prefix         = '';
    // $controllerName = 'order';
    // Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
    //     $controller = ucfirst($controllerName)  . 'Controller@';
    //     Route::get('/order.html',  [ 'as' => $controllerName ,  'uses' => $controller . 'index' ]) ;
    //     Route::get('get-price-shipping/{id}', [ 'as' => $controllerName . '/getPriceShipping',  'uses' => $controller . 'getPriceShipping']);
    //     Route::get('get-coupon/{code}-{total}', [ 'as' => $controllerName . '/coupon',  'uses' => $controller . 'coupon']);
    // });



    //=============================== ADD TO CART ======================
    // $prefix         = '';
    // $controllerName = 'addToCart';
    // Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
    // $controller = ucfirst($controllerName)  . 'Controller@';
    // Route::get('/`cart-{product_id}-{quantity?}`',  [ 'as' => $controllerName ,  'uses' => $controller . 'index' ]) 
    //             ->where('quantity', '[0-9]+')
    //             ->where('product_id', '[0-9]+');
    // });






});
