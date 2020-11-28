<?php

namespace App\Http\Controllers\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;    
use App\Models\SettingModel ;
use App\Models\SliderModel ;
use App\Models\MenuModel ;
use App\Models\FeedbackModel ;

class HomeController extends Controller
{
    private $pathViewController = 'news.pages.home.';  // slider
    private $controllerName     = 'home';
    private $params             = [];
    private $model;

    public function __construct()
    {
        view()->share('controllerName', $this->controllerName);
    }

   public function index(Request $request)
      {  
         $settingModel  = new SettingModel();
         $sliderModel   = new SliderModel() ;
         $menuModel     = new MenuModel() ;
         $feedBackModel = new FeedBackModel() ;
         
         $itemsSetting  = $settingModel->getItem('general', [ 'task' => 'get-item']); 
        
         $itemsSetting  = json_decode($itemsSetting['value']);
        
         $itemsSlider   = $sliderModel->listItems( null,    [ 'task'=> 'news-list-items']); 
         $itemsFeedBack = $feedBackModel->listItems( null,  [ 'task'=> 'news-list-items']); 
         $itemsMenu     = $menuModel->listItems( null,      [ 'task'=> 'front-end-list-items']); 
         return view($this->pathViewController .  'index' , compact('itemsSetting','itemsSlider','itemsMenu','itemsFeedBack') );
      }

   public function notFound(Request $request)
   {   
      return view($this->pathViewController .  'not_found', [
            'params'        => $this->params,
      ]);
   }

 
}