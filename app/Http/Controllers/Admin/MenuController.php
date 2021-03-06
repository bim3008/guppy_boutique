<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuModel           as MainModel;
// use App\Http\Requests\Menu  as MainRequest ;    

class MenuController extends AdminController
{
    
    public function __construct()
    {
        $this->pathViewController = 'admin.pages.menu.'; 
        $this->controllerName     = 'menu';
        // view()->share('controllerName', $this->controllerName);
        $this->model = new MainModel();
        $this->params["pagination"]["totalItemsPerPage"] = 5;
        parent::__construct();
    }

    
    public function index(Request $request)
    {   
       $this->params['filter']['status'] = $request->input('filter_status', 'all' ) ;
       $this->params['search']['field']  = $request->input('search_field', '' ) ; // all id description
       $this->params['search']['value']  = $request->input('search_value', '' ) ;

       $items               = $this->model->listItems($this->params, ['task'  => 'admin-list-nested']);
       $itemsStatusCount    = $this->model->countItems($this->params, ['task' => 'admin-count-items-group-by-status']); // [ ['status', 'count']]

       return view($this->pathViewController .  'index', [
             'params'           => $this->params,
             'items'            => $items,
             'itemsStatusCount' =>  $itemsStatusCount,
       ]);
    }

    public function save(Request $request) {
        if ($request->method() == 'POST') {
            $params = $request->all();
            $task   = "add-item";
            $notify = "Thêm phần tử thành công!";

            if($params['id'] !== null) {
                $task   = "edit-item";
                $notify = "Cập nhật phần tử thành công!";
            }
            $this->model->saveItem($params, ['task' => $task]);
            return redirect()->route($this->controllerName)->with("zvn_notify", $notify);
        }
        
    }

    public function node(Request $request){
        $node = $this->model->find($request->id);
        if($request->node == 'up') {
          $node->up();
        } else {
          $node->down();
        }
        return redirect()->route($this->controllerName)->with('success','Change Success!');
      }

    public function type_menu(Request $request){
        $params['id']         =  $request->id;
        $params['type_menu']  =  $request->type_menu;
        $items = $this->model->saveItem($params, ['task' => 'change-type-menu']);
        echo json_encode($items) ;
     
    }



}