<?php

namespace App\Helpers;
use Illuminate\Support\Str;

class MenuNested
{
    // RECURSIVE ARTICLE MENU 
    public static function recursiveMenuArticle($items, &$xhtmlMenu = ''){
        $xhtmlMenu .= '<ul>';
        foreach ($items as $key => $value) {
            if($value['status'] == 'active') {
                // $link = URL::linkCategory($value['id'],$value['name']);   
                $link = '';   
                $xhtmlMenu .= '<li><a href="'.$link.'">'.$value['name'].'</a>';
                if($value['children']) {
                    self::recursiveMenuArticle($value['children'],$xhtmlMenu);
                }
                $xhtmlMenu .= '</li>';
            }
        }
        $xhtmlMenu .= '</ul>';
        return $xhtmlMenu;
    }
}