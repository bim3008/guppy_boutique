<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\SliderModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $pathViewController = 'admin.pages.dashboard.'; 
    private $controllerName     = 'dashboard';
    
    public function __construct()
    {
        view()->share('controllerName', $this->controllerName);
    }
    public function index()
    {   
        $sliderItem = new SliderModel() ;

        $totalSlider= json_decode(json_encode($sliderItem->countItem())) ;
        $arrTable =[ 
            [
                'total' =>   $totalSlider,
                'name'  => 'Slider',
                'icon'  => 'fa',
                'link'  =>  'abc/a',
            ] 
        ];
       
        return view($this->pathViewController .  'index', compact('arrTable')
        );
    }

  
}

