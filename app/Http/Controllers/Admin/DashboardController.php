<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\SliderModel;
use App\Models\ArticleModel;
use App\Models\UserModel;
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
        $sliderItem   = new SliderModel() ;     $totalSlider   = $sliderItem->countItem() ;
        $articleItem  = new ArticleModel() ;    $totalArticle  = $articleItem->countItem() ;
        $userItem     = new UserModel() ;       $totalUser     = $userItem->countItem() ;
        $categoryItem = new CategoryModel() ;   $totalCategory = $categoryItem->countItem();
     
        $arrTable =[ 
            [
                'total' =>  $totalSlider,
                'name'  => 'Slider',
                'icon'  => 'fa-sliders',
                'link'  => route('slider'),
            ],[
                'total' =>  $totalCategory,
                'name'  => 'Thư mục',
                'icon'  => 'fa-folder-open',
                'link'  => route('category'),
            ],[
                'total' =>  $totalUser,
                'name'  => 'Người dùng',
                'icon'  => 'fa-users',
                'link'  => route('user'),
            ],[
                'total' =>  $totalArticle,
                'name'  => 'Bài viết',
                'icon'  => 'fa-newspaper-o',
                'link'  => route('article'),
            ]  
        ];
        return view($this->pathViewController .  'index', compact('arrTable')
        );
    }

  
}

