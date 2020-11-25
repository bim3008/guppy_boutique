<?php

namespace App\Http\Controllers\Guppy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;    
use App\Models\SettingModel ;
use App\Models\SliderModel ;
use App\Models\MenuModel ;

class HomeController extends Controller
{
    private $pathViewController = 'guppy.pages.home.';  // slider
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
         $itemsSetting  = $settingModel->getItem('general', [ 'task' => 'get-item']); 
         $itemsSlider   = $sliderModel->listItems( null,    [ 'task'=> 'news-list-items']); 
         $itemsMenu     = $menuModel->listItems( null,      [ 'task'=> 'front-end-list-items']); 
         return view($this->pathViewController .  'index' , compact('itemsSetting','itemsSlider','itemsMenu') );
      }

   public function notFound(Request $request)
   {   
      return view($this->pathViewController .  'not_found', [
            'params'        => $this->params,
      ]);
   }

 
}