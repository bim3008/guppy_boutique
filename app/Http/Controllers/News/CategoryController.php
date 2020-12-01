<?php

namespace App\Http\Controllers\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;    
use App\Models\ArticleModel ;
use App\Models\CategoryArticleModel ;


class CategoryController extends Controller
{
    private $pathViewController = 'news.pages.category.';  // slider
    private $controllerName     = 'category';
    private $params             = [];
    private $model;

    public function __construct()
    {
        view()->share('controllerName', $this->controllerName);
    }

   public function index(Request $request)
   {  
      $params['category_id']    = $request->category_id ;   
      $params['category_name']  = $request->category_name ;   
      $articleModel             = new ArticleModel() ;   
     
      $itemsArticleInCategory   = $articleModel->listItems($params ,[ 'task'=> 'news-list-items-in-category']) ;
      if(empty($itemsArticleInCategory))  return redirect()->route('home');
      return view($this->pathViewController .  'index' , compact('itemsArticleInCategory','params') );
  
   }

   public function notFound(Request $request)
   {   
      return view($this->pathViewController .  'not_found', [
            'params'        => $this->params,
      ]);
   }

 
}