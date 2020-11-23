<?php

namespace App\Models;

use App\Models\AdminModel;
use App\Models\AttributeModel   as AttributeModel;
use App\Models\TagModel         as TagModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;

use function GuzzleHttp\json_decode;

class ProductModel extends AdminModel
{
    public function __construct() {
        $this->table               = 'product';
        $this->controllerName      = 'product';
        $this->folderUpload        = 'product' ; 
        $this->fieldSearchAccepted = ['id', 'name', 'link']; 
        $this->crudNotAccepted     = ['_token'];
    }

    public function listItems($params = null, $options = null) {
     
        $result = null;

        if($options['task'] == "admin-list-items") {
            $query = $this->select('product.id', 'product.name', 'product.attribute', 'product.price', 'product.thumb', 'product.status','product.type','category_product_id', 'cp.name as category_product_name')
                        ->leftJoin('category_product as cp', 'product.category_product_id', '=', 'cp.id');
               
            if ($params['filter']['status'] !== "all")  {
                $query->where('status', '=', $params['filter']['status'] );
            }

            if ($params['search']['value'] !== "")  {
                if($params['search']['field'] == "all") {
                    $query->where(function($query) use ($params){
                        foreach($this->fieldSearchAccepted as $column){
                            $query->orWhere($column, 'LIKE',  "%{$params['search']['value']}%" );
                        }
                    });
                } else if(in_array($params['search']['field'], $this->fieldSearchAccepted)) { 
                    $query->where($params['search']['field'], 'LIKE',  "%{$params['search']['value']}%" );
                } 
            }

            $result =  $query->orderBy('id', 'desc')
                            ->paginate($params['pagination']['totalItemsPerPage']);

        }

        if($options['task'] == "front-end-get-product-in-category") {
            $result = $this->select('id', 'name', 'price', 'thumb', 'category_product_id')
                    ->where('category_product_id', '=' , $params['id'])    
                    ->get()
                    ->toArray();
        }
      

        return $result;
    }

    public function countItems($params = null, $options  = null) {
     
        $result = null;

         if($options['task'] == 'admin-count-items-group-by-status') {
               $query = $this::groupBy('status')
                           ->select( DB::raw('status , COUNT(id) as count') );

               if ($params['search']['value'] !== "")  {
                  if($params['search']['field'] == "all") {
                     $query->where(function($query) use ($params){
                           foreach($this->fieldSearchAccepted as $column){
                              $query->orWhere($column, 'LIKE',  "%{$params['search']['value']}%" );
                           }
                     });
                  } else if(in_array($params['search']['field'], $this->fieldSearchAccepted)) { 
                     $query->where($params['search']['field'], 'LIKE',  "%{$params['search']['value']}%" );
                  } 
               }
               $result = $query->get()->toArray();
         }

         if($options['task'] == 'admin-count-items-dashboard') {
            $result =  DB::table($this->table)
                        ->select(DB::raw('count(id) as count'))
                        ->get()->first();
         }


        return $result;
    }

    public function getItem($params = null, $options = null) { 
        $result = null;
        if($options['task'] == 'get-item') {
            $result = self::select('product.id', 'product.name', 'product.status' ,'product.price','product.thumb','category_product_id', 'attribute','attribute_group_id', 'product.link', 'product.content', 'product.tag','product.type','t.name as tag_name')
                        ->leftJoin('tag as t', 'product.tag', '=', 't.id')
                        ->where('product.id', $params['id'])
                        ->first()
                        ->toArray();
            
        }

        if($options['task'] == 'get-product-in-cart') {
            $result = self::select('id', 'name', 'status' ,'price','thumb')
                            ->where('id', $params)
                            ->first()
                            ->toArray();
            
        }

        if($options['task'] == 'get-price-product-order') {
           $result = self::select('price')->where('id', $params)->get() ->first()->toArray();
        }

        if($options['task'] == 'admin-get-name-attribute-group') {
            $result = AttributeModel::select('id', 'name', 'status')->where('attribute_group_id', $params['id'])->get()->toArray();
        }
        return $result;
    }

    public function saveItem($params = null, $options = null) { 
        if($options['task'] == 'change-status') {
            $status = ($params['currentStatus'] == "active") ? "inactive" : "active";
            $class  = ($params['currentStatus'] == "active") ? "info"     : "success";
            self::where('id', $params['id'])->update(['status' => $status ]);
            return [ 
                'name'     =>   config('zvn-notify.status.'.$status.''),
                'class'    =>   config('zvn-notify.status.'.$class.'') ,
                'link'     =>   route($this->controllerName .'/status',['id' => $params['id'],'status' => $status,])   ,
                'message'  =>   config('zvn-notify.status.message')  ,
            ];
        }
        if($options['task'] == 'change-type') {
            self::where('id', $params['id'])->update(['type' => $params['currentType']]);
            return [ 'message' => config('zvn-notify.select.message')] ;
        }

        if($options['task'] == 'add-item') {
            $idTag              = TagModel::select('id')->where('name', $params['tag'])->get();
            $tag                = json_decode($idTag);
            $params['tag']      = $tag[0]->id;
            if (isset($params['attribute'])) {
                foreach($params['attribute'] as $key => $value){
                    $value = explode(',',$value[0]) ;
                    $valueAttribute[] = (["name"  => $key ,"value" =>  $value])  ; 
                    $params['attribute']    = json_encode($valueAttribute) ;
                }
            }
            $params['thumb']        = json_encode($params['thumb']['name']); 
            $params['created_by']   = "duy-nguyen";
            $params['created']      = date('Y-m-d');
            self::insert($this->prepareParams($params));        
        }

        if($options['task'] == 'edit-item') {
            if (isset($params['attribute'])) {
                foreach($params['attribute'] as $key => $value){
                    $value = explode(',',$value) ;
                    $valueAttribute[]       = (["name"  => $key ,"value" =>  $value])  ; 
                    $params['attribute']    = json_encode($valueAttribute) ;
                }
            }
                $params['thumb']        = json_encode($params['thumb']['name']); 
                $params['modified_by']   = "duy-nguyen";
                $params['modified']      = date('Y-m-d');
            self::where('id', $params['id'])->update($this->prepareParams($params));
        }
    }

    public function deleteItem($params = null, $options = null) 
    { 
        if($options['task'] == 'delete-item') {
            $item   = self::getItem($params, ['task'=>'get-thumb']); // 
            $this->deleteThumb($item['thumb']);
            self::where('id', $params['id'])->delete();
        }
    }

}

