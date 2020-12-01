<?php

namespace App\Http\Controllers\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;    
use App\Models\ArticleModel ;
use App\Models\CategoryArticleModel ;


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
      $params['article_id']   = $request->article_id ;   
      $articleModel           = new ArticleModel() ;   
      $categoryArticleModel   = new CategoryArticleModel() ;   

      $itemsArticle           = $articleModel->getItem($params ,[ 'task'=> 'news-get-item']) ;
      $params["category_id"]  = $itemsArticle['category_id'];
      if(empty($itemsArticle))  return redirect()->route('home');
      $itemsArticle['related_articles']   = $articleModel->listItems($params, ['task'  => 'news-list-items-related-in-category']);
      return view($this->pathViewController .  'index' , compact('itemsSetting','itemsArticle') );
   }

   public function notFound(Request $request)
   {   
      return view($this->pathViewController .  'not_found', [
            'params'        => $this->params,
      ]);
   }

 
}