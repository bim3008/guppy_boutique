<?php

namespace App\Http\Controllers\Guppy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;    

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
         return view($this->pathViewController .  'index');
      }

   public function notFound(Request $request)
   {   
      return view($this->pathViewController .  'not_found', [
            'params'        => $this->params,
      ]);
   }

 
}