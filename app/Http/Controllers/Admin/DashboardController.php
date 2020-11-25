<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\AdminModel;
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
        $totalSlider   = AdminModel::countItem('slider');
        $totalArticle  = AdminModel::countItem('article');
        $totalUser     = AdminModel::countItem('user') ;
        $totalCategory = AdminModel::countItem('category');
        $totalQuestion = AdminModel::countItem('question');
        $totalFeedback = AdminModel::countItem('feedback');
        $totalContact  = AdminModel::countItem('contact');
        $totalProduct  = AdminModel::countItem('product');
     
        return view($this->pathViewController .  'index', compact('totalSlider','totalArticle','totalUser','totalCategory','totalQuestion','totalFeedback','totalContact','totalProduct')
        );
    }

  
}

