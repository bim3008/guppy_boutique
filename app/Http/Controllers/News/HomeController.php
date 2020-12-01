<?php

namespace App\Http\Controllers\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;    
use App\Models\SettingModel ;
use App\Models\SliderModel ;
use App\Models\MenuModel ;
use App\Models\FeedbackModel ;
use App\Models\ArticleModel ;
use App\Models\ProductModel ;


class HomeController extends Controller
{
    private $pathViewController = 'news.pages.home.';  
    private $controllerName     = 'home';
    private $params             = [];
    private $model;

    public function __construct()
    {
        view()->share('controllerName', $this->controllerName);
    }

   public function index(Request $request)
      {  
       
         $sliderModel       = new SliderModel() ;
         $menuModel         = new MenuModel() ;
         $feedBackModel     = new FeedBackModel() ;
         $articleModel      = new ArticleModel() ;
         $productModel      = new ProductModel() ;
        
         $itemsSlider       = $sliderModel->listItems(   null,  [ 'task'=> 'news-list-items']); 
         $itemsFeedBack     = $feedBackModel->listItems( null,  [ 'task'=> 'news-list-items']); 
         $itemsMenu         = $menuModel->listItems(     null,  [ 'task'=> 'front-end-list-items']); 
         $articleFeatured   = $articleModel->listItems(  null,  [ 'task'=> 'news-list-items-featured']) ;
         $productFeatured   = $productModel->listItems(  null,  [ 'task'=>  'news-get-items-featured' ]);
         $productAccessory = $productModel->listItems(  null,  [ 'task'=>  'news-get-items-accessory']);
  

         return view($this->pathViewController .  'index' , compact('itemsSlider','itemsMenu','itemsFeedBack','articleFeatured','productFeatured','productAccessory') );
      }

   public function notFound(Request $request)
   {   
      return view($this->pathViewController .  'not_found', [
            'params'        => $this->params,
      ]);
   }

 
}