@php     
    $controllerName = !empty($controllerName) ? $controllerName  : null ;
    use App\Helpers\Template as Template ;
    $arrThumb = json_decode($value["thumb"]) ;
    $thumb  = Template::showProductThumb($arrThumb[0] , 'uploads')  ;
    if($pageIndex == 'artilce-lastest'){
        $thumb  = Template::showItemThumb($controllerName,$value['thumb'], null)  ;
    } 
@endphp


<figure class="product-image-container">
    <a href="product.html" class="product-image">
        {!! $thumb !!}
    </a>
    {{-- <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a> --}}
</figure> 
