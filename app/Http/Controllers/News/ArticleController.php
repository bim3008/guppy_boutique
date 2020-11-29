<?php

namespace App\Http\Controllers\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;    
use App\Models\ArticleModel ;


class ArticleController extends Controller
{
    private $pathViewController = 'news.pages.article.';  // slider
    private $controllerName     = 'article';
    private $params             = [];
    private $model;

    public function __construct()
    {
        view()->share('controllerName', $this->controllerName);
    }

   public function index(Request $request)
   {  
      $params['id']  = $request->article_id ;  
      $articleModel  = new ArticleModel() ;   

      $itemsArticle  = $articleModel->getItem($params ,[ 'task'=> 'news-get-item']) ;
      if(empty($itemsArticle))  return redirect()->route('home');
    
      return view($this->pathViewController .  'index' , compact('itemsSetting','itemsArticle') );
   }

   public function notFound(Request $request)
   {   
      return view($this->pathViewController .  'not_found', [
            'params'        => $this->params,
      ]);
   }

 
}