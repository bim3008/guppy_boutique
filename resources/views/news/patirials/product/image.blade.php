<<<<<<< HEAD
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
=======
@php
    $thumb   = asset('uploads/' . json_decode($item['thumb'])[0]);
@endphp
<figure class="product-image-container">
    <a href="product.html" class="product-image">
    <img src="{{ $thumb }}" alt="product" style="width: 180px; height:150px">
    </a>
</figure>
>>>>>>> 1765a36cacd283a92f26f7284d1c9171cea8965d
