<?php

namespace App\Http\Controllers\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;    
use App\Models\ProductModel ;
use App\Models\CategoryArticleModel ;


class CatProductController extends Controller
{
    private $pathViewController = 'news.pages.catproduct.';  // slider
    private $controllerName     = 'catProduct';
    private $params             = [];
    private $model;

    public function __construct()
    {
        view()->share('controllerName', $this->controllerName);
    }

   public function index(Request $request)
   {  
      $params['id']    = $request->cat_pro_id  ;   
      $params['name']  = $request->cat_pro_name ;   
       
      $productModel                 = new ProductModel();
      $productInCat                 = $productModel->listItems($params,['task' => 'news-get-items-in-category']) ;
      dd($productInCat );

      return view($this->pathViewController .  'index'  );
   }

   public function notFound(Request $request)
   {   
      return view($this->pathViewController .  'not_found', [
            'params'        => $this->params,
      ]);
   }

 
}