<?php

namespace App\Http\Controllers\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;    
use App\Models\ProductModel ;


class ProductfController extends Controller
{
    private $pathViewController = 'news.pages.product.';  
    private $controllerName     = 'product';
    private $params             = [];
    private $model;

    public function __construct()
    {
        view()->share('controllerName', $this->controllerName);
    }

   public function index(Request $request)
      {  
         $productModel     = new ProductModel() ; 
         $items            = $productModel->listItems(null, ['task' => 'front-end-list-product']);
         
         return view($this->pathViewController .  'index', compact('items'));
      }

   public function notFound(Request $request)
   {   
      return view($this->pathViewController .  'not_found', [
            'params'        => $this->params,
      ]);
   }

   public function detail(Request $request)
   {   
      $params['id']        = $request->product_id;
      $productModel        = new ProductModel() ; 
      $item                = $productModel->getItem($params['id'], ['task' => 'front-end-product-detail']);
      $itemsFeatured       = $productModel->listItems(null, ['task' => 'front-end-get-product-featured']);
      return view($this->pathViewController .  'product_detail', compact('item', 'itemsFeatured'));
   }

 
}