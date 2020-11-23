<?php

namespace App\Helpers;
use Illuminate\Support\Str;
use Config;
use App\Models\CategoryModel  ;

class SelectBox
{
    public static function showItemSelect($controllerName, $id, $displayValue, $fieldName)
    {
       $link          = route($controllerName . '/' . $fieldName, [$fieldName => 'new_value', 'id' => $id]);
        
       $tmplDisplay = Config::get('zvn.template.' . $fieldName);
       $xhtml = sprintf('<select name="select_change_attr" data-url="%s" class="form-control">', $link  );

        foreach ($tmplDisplay as $key => $value) {
           $xhtmlSelected = '';
           if ($key == $displayValue) $xhtmlSelected = 'selected="selected"';
            $xhtml .= sprintf('<option value="%s" %s>%s</option>', $key, $xhtmlSelected, $value['name']);
        }
        $xhtml .= '</select>';

        return $xhtml;
    }
    public static function showItemStar()
    {
        $xhtml ='
                <select  id="combostar" name="combostar" class="form-control" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5" selected="selected">5</option>
                </select>' ;
        return $xhtml;
    }
    public static function showItemSelectCategory($categoryName,$keySelect)
    {
       $xhtml = sprintf('<select  name="cat_filter" class="btn btn-default"><option value="default">Chọn danh mục</option>' );
  
        foreach ($categoryName as $key => $value) {
            $xhtmlSelected = null ;
            if ($key == $keySelect)  $xhtmlSelected = 'selected="selected"';;
            $xhtml .= sprintf('<option %s value="%s">%s</option>', $xhtmlSelected , $key, $value);
        }
        $xhtml .= '</select>';

        return $xhtml;
    }
    public static function showCategoryChangeAjax($controllerName, $id, $categoryID, $fieldName)
    {

       $categoryModel = new CategoryModel();
       $link          = route($controllerName . '/' . $fieldName, [$fieldName => 'new_value', 'id' => $id]);
        
       $xhtml = sprintf('<select name="select_change_attr" data-url="%s" class="form-control">', $link  );
    
       $itemSelectBox  = $categoryModel->listItems(null,['task' => 'admin-list-items-in-selectbox']);
      
        foreach ($itemSelectBox as $key => $value) {
            $xhtmlSelected = null;
            if($key == $categoryID) $xhtmlSelected = 'selected="selected"';
            $xhtml .= sprintf('<option %s value="%s">%s</option>', $xhtmlSelected , $key, $value);
        }
        $xhtml .= '</select>';

        return $xhtml;
    }
}

