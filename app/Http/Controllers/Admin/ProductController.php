<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController as AdminController;
use Illuminate\Http\Request;
use App\Models\ProductModel           as MainModel;
use App\Models\TagModel;
use App\Models\AttributeModel          as AttributeModel;
use App\Http\Requests\ProductRequest   as MainRequest ;    
use App\File;
use Illuminate\Support\Facades\Storage;
class ProductController extends AdminController
{
   public function __construct()
   {
      $this->pathViewController = 'admin.pages.product.'; 
      $this->controllerName     = 'product';
      $this->model = new MainModel();
      $this->params["pagination"]["totalItemsPerPage"] = 15;
      parent::__construct();
   }

   public function save(MainRequest $request)
   {
      if ($request->method() == 'POST') {
            $params = $request->all();
            $task   = "add-item";
            $notify = "Thêm phần tử thành công!";

            if(isset($params['id']) && $params['id'] !== null) {
               $task   = "edit-item";
               $notify = "Cập nhật phần tử thành công!";
            }
   
            $this->model->saveItem($params, ['task' => $task]);
            return redirect()->route($this->controllerName)->with("zvn_notify", $notify);
      }
   }
   public function storeMedia(Request $request)
   {
      $path = public_path('uploads');

      if (!file_exists($path)) {
         mkdir($path, 0777, true);
      }

      $file = $request->file('file');
      $name = '1-' . uniqid() . '_' . trim($file->getClientOriginalName());

      $file->move($path, $name);

      return response()->json([
         'name'          => $name,
         'original_name' => $file->getClientOriginalName(),
      ]);
   }
   public function getAttribute(Request $request)
   {
      $params["id"]                 = $request->id;
      $items = $this->model->getItem($params, ['task' => 'admin-get-name-attribute']);
      // return $items;
      if(count($items) > 0){
         foreach($items as $item){
            $name       = array_column($items, 'name');
            $id         = array_column($items, 'id');
            $arr        = array_combine($id, $name);
         }
         return $arr;
      }
   }
   public function autocomplete(Request $request)
   {
      $tag     = new TagModel();
      $term    = $request->get('term');
      $items   = $tag->listItems($term, ['task' => 'admin-product-tag']);
      $names   = [];
      foreach ($items as $item) {
         array_push($names, $item['name']);
      }
      echo json_encode($names);
   }

   public function addPriceRow() {
      return view($this->pathViewController .  'childs.product_price_row');
   }

     
     
}