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
        $this->crudNotAccepted     = ['_token', 'attribute_group_change_price', 'price_custom_name','price_custom_value','id', 'attribute_group'];
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
        $this->table   = 'product as p' ; 
        if($options['task'] == "news-get-items-featured") {
            $result = $this->select('p.id', 'p.name', 'p.price', 'p.thumb', 'p.category_product_id')
                    ->leftJoin('category_product as c', 'p.category_product_id', '=', 'c.id')
                    ->where('p.type',   '=' , 'featured')    
                    ->where('p.status', '=' , 'active')    
                    ->where('p.category_product_id',   '=' , 49)    
                    ->get()
                    ->toArray();
        }
        if($options['task'] == "news-get-items-accessory") {
            $result = $this->select('p.id', 'p.name', 'p.price', 'p.thumb', 'p.category_product_id')
                    ->leftJoin('category_product as c', 'p.category_product_id', '=', 'c.id')   
                    ->where('p.type',   '=' , 'featured')  
                    ->where('p.category_product_id',   '=' , 63)     
                    ->get()
                    ->toArray();
        }
        if($options['task'] == "news-get-items-in-category"){
         
            $result = $this->select('p.id', 'p.name', 'p.price', 'p.thumb', 'p.category_product_id' ,'c.name as cate_pro_name')
                ->leftJoin('category_product as c', 'p.category_product_id', '=', 'c.id')   
                ->where('p.category_product_id', '=' , $params['id'])    
                // ->get()
                // ->toArray()
                ->paginate($params['pagination']['totalItemsPerPage']);
            if($result) $result ;
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
            $result = self::select('product.id', 'product.name', 'product.status' ,'product.price','product.thumb','category_product_id', 'product.attribute','product.attribute_group_id', 'product.link', 'product.content', 'product.tags', 'product.price_custom','product.attribute_name_price_custom','product.type','t.name as tag_name')
                        ->leftJoin('tag as t', 'product.tags', '=', 't.id')
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

        if($options['task'] == 'admin-get-name-attribute') {
            $result = AttributeModel::select('id', 'name', 'status', 'change_price')
                    ->where('attribute_group_id', $params['id'])
                    ->where('change_price', 'no')
                    ->get()->toArray();
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
            if (isset($params['attribute']) && count($params['attribute']) > 1) {
                foreach ($params['attribute'] as $key => $value) {
                    $value = explode(',',$value[0]) ;
                    $valueAttribute[] = (["name"  => $key ,"value" =>  $value])  ; 
                    $params['attribute']    = json_encode($valueAttribute) ;
                }
            }
            
            $params['tags']                     = isset($params['tags']) ? json_encode($params['tags']) : null;
            $params['thumb']                    = isset($params['thumb']) ? json_encode($params['thumb']['name']) : null; 
            $params['created_by']               = "duy-nguyen";
            $params['created']                  = date('Y-m-d');
            $params['price_custom_name']        = isset($params['price_custom_name']) ? json_encode($params['price_custom_name']): null;
            $params['price_custom_value']       = isset($params['price_custom_value']) ? json_encode($params['price_custom_value']): null;
            $params['price_custom']             = json_encode((["name"  => $params['price_custom_name'] ,"value" =>  $params['price_custom_value']]));
            self::insert($this->prepareParams($params));        
        }

        if($options['task'] == 'edit-item') {
            if (isset($params['attribute'])) {
                foreach($params['attribute'] as $key => $value){
                    $valueAttribute[]       = (["name"  => $key ,"value" =>  json_encode($value)])  ; 
                    $params['attribute']    = json_encode($valueAttribute) ;
                    
                }
            }
            $params['tags']                 = isset($params['tags']) ? json_encode($params['tags']): null;
            $params['thumb']                = isset($params['thumb']) ? json_encode($params['thumb']['name']): null;
            $params['price_custom_name']    = isset($params['price_custom_name']) ? json_encode($params['price_custom_name']): null;
            $params['price_custom_value']   = isset($params['price_custom_value']) ? json_encode($params['price_custom_value']): null;
            $params['price_custom']         =  json_encode((["name"  => $params['price_custom_name'] ,"value" =>  $params['price_custom_value']]));
            $params['modified_by']          = "duy-nguyen";
            $params['modified']             = date('Y-m-d');
           
            self::where('id', $params['id'])->update($this->prepareParams($params));
        }
    }
    public function deleteItem($params = null, $options = null) 
    { 
        if($options['task'] == 'delete-item') {
            $item   = self::getItem($params, ['task'=>'get-thumb']); 
            $this->deleteThumb($item['thumb']);
            self::where('id', $params['id'])->delete();
        }
    }

}

