@php     
    $controllerName = !empty($controllerName) ? $controllerName  : null ;
    use App\Helpers\Template as Template ;
    $arrThumb   = json_decode($value["thumb"]) ;
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    die();
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
<<<<<<< HEAD
=======
@php
    $thumb   = asset('uploads/' . json_decode($item['thumb'])[0]);
@endphp
<figure class="product-image-container">
    <a href="product.html" class="product-image">
    <img src="{{ $thumb }}" alt="product" style="width: 180px; height:150px">
    </a>
</figure>
>>>>>>> cbffd38f53b50c3b7e547da4d463df25735abef9
