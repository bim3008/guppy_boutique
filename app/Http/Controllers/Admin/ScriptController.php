<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\ScriptModel as MainModel;
use App\Http\Requests\ScriptRequest as MainRequest ;    

class ScriptController extends AdminController
{

    public function __construct()
    {
        $this->pathViewController = 'admin.pages.script.';  // slider
        $this->controllerName     = 'script';
        $this->model = new MainModel();
        $this->params["pagination"]["totalItemsPerPage"] = 5;
        parent::__construct();
    }
    public function save(Request $request)
    {
        if ($request->method() == 'POST') {

            $params = $request->input();
          
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
   
}