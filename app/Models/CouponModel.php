<?php

namespace App\Models;

use App\Models\AdminModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB; 
use Config;
class CouponModel extends AdminModel
{
    public function __construct() {
        $this->table               = 'coupon';
        $this->folderUpload        = 'coupon' ; 
        $this->fieldSearchAccepted = ['name','price']; 
        $this->crudNotAccepted     = ['_token'];
    }

    public function listItems($params = null, $options = null) {
     
        $result = null;

        if($options['task'] == "admin-list-items") {
            $query = $this->select('id', 'price_start', 'date_start', 'date_end','type_coupon', 'value', 'code','status','created', 'created_by', 'modified', 'modified_by');
               
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

        if($options['task'] == 'news-list-items') {
            $query = $this->select('id', 'name')
                        ->where('status', '=', 'active' )
                        ->limit(5);

            $result = $query->get()->toArray();
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

        return $result;
    }

    public function getItem($params = null, $options = null) { 
        $result = null;
        
        if($options['task'] == 'get-item') {
            $result = self::select('id','code','value', 'type_coupon','price_start','status','date_start' ,'date_end')->where('id', $params['id'])->first();
        }

        if($options['task'] == 'get-thumb') {
            $result = self::select('id', 'thumb')->where('id', $params['id'])->first();
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
                        'link'     =>   route($this->table .'/status',['id' => $params['id'],'status' => $status,])   ,
                        'message'  =>   config('zvn-notify.status.message')  ,
                    ];
        }
        if($options['task'] == 'change-price') {
            self::where('id', $params['id'])->update(['price' => $params['currentPrice']]);
            return [ 'message' => config('zvn-notify.price.message')] ;
        }
        if($options['task'] == 'add-item') {
           
            $params['created_by'] = "truongdinh";
            $params['created']    = date('Y-m-d');
            self::insert($this->prepareParams($params));        
        }

        if($options['task'] == 'edit-item') {      
            $params['modified_by']   = "hailan";
            $params['modified']      = date('Y-m-d');
            self::where('id', $params['id'])->update($this->prepareParams($params));
        }
    }

    public function deleteItem($params = null, $options = null) 
    { 
        if($options['task'] == 'delete-item') {
            self::where('id', $params['id'])->delete();
        }
    }

}

