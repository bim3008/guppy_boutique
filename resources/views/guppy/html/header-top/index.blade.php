@php
   $item = json_decode($itemsSetting['value']);
@endphp
<div class="header-top">
    <div class="container">
        <div class="header-left header-dropdowns">
            @include('guppy.html.header-top.search')
            @include('guppy.html.header-top.languge')
        </div>

        <div class="header-right">
            @include('guppy.html.header-top.info')
            @include('guppy.html.header-top.action')
            @include('guppy.html.header-top.cart')
        </div>
    </div>
</div>