<?php

namespace App\Http\Controllers\Guppy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;    
use App\Models\SettingModel ;
use App\Models\SliderModel ;

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
         $itemsSetting  = $settingModel->getItem('general',[ 'task' => 'get-item']); 
         $itemsSlider   = $sliderModel->listItems( null,[ 'task'     => 'news-list-items']); 
         return view($this->pathViewController .  'index' , compact('itemsSetting','itemsSlider') );
      }

   public function notFound(Request $request)
   {   
      return view($this->pathViewController .  'not_found', [
            'params'        => $this->params,
      ]);
   }

 
}