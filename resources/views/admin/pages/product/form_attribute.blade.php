@php
    use App\Helpers\Form as FormTemplate;
    use App\Helpers\Template;
    use App\Models\AttributeGroupModel; 
    use App\Models\AttributeModel; 
    $attributeModel = new AttributeModel();
    $attribute      = $attributeModel->getItem(null, ['task' => 'admin-get-name-attribute-group']);
    $formInputAttr  = config('zvn.template.form_input');
    $formLabelAttr  = config('zvn.template.form_label');
    $attributeGroup                 = new AttributeGroupModel();
    $itemsAttributeGroup            = $attributeGroup->listItems(null, ['task' => 'admin-list-items-in-selectbox']);
    $itemsAttributeChangePrice      = $attributeModel->listItems(null, ['task' => 'admin-list-items-in-selectbox-change-price']);
    $itemsAttributeGroup['default']             = 'Chọn nhóm thuộc tính';
    $itemsAttributeChangePrice['default']  = 'Chọn nhóm thuộc tính';
    ksort($itemsAttributeGroup);
    ksort($itemsAttributeChangePrice);
    $link = route($controllerName . '/getAttribute', ['id' => 'attribute_new']);
    $xhtml = null;
   
    if (!isset($item['id'])) {
        $elements = [
            [
                'label'   => Form::label('attribute_group_id', 'Nhóm thuộc tính', $formLabelAttr),
                'element' => Form::select('attribute_group', $itemsAttributeGroup, $item['attribute_group_id'], ['id' => 'attribute-group' , 'class' => 'form-control col-md-6 col-xs-12 attribute_group', 'data-link' => $link])
            ],
            [
                'label'   => Form::label('attribute_group', 'Thuộc tính thay đổi giá', $formLabelAttr),
                'element' => Form::select('attribute_group_change_price', $itemsAttributeChangePrice, $item['attribute_group_id'], ['id' => 'attribute-group-change-price' , 'class' => 'form-control col-md-6 col-xs-12', 'data-link' => route("$controllerName/add-price-row")])
            ],
        ];
    }else{
        $priceCustom = json_decode($item['price_custom'], true);
        $xhtml = null;
        foreach ($priceCustom as $key => $value) {
            echo '<pre>';
            print_r($value);
            echo '</pre>';
            // $xhtml .= sprintf('<div class="form-group new"  id="attr">
            //     <div class="col-md-10 col-sm-6 col-xs-12 row-123 " name="remove-row">
            //         <input class="col-md-4 col-xs-12" name="attribute_change_price[name][]" type="text" placeholder="Tên" value="%s">
            //         <input class=" col-md-4 col-xs-12" name="attribute_change_price[price][]" type="text" placeholder="Giá" style="margin-left:2px">
            //         <input class=" col-md-2 col-xs-12" name="attribute_change_price[ordering][]" type="text" placeholder="Thứ tự" style="margin-left:2px">
            //             <a href="#" id="remove-row" style="margin: 15px;  border: 2px solid red; border-radius: 12px; color: red; padding: 2px">
            //                 <i class="fa fa-minus"></i>
            //             </a>
            //     </div>
            //     <a href="#" id="add-row" style="margin: 15px;  border: 2px solid aqua; border-radius: 12px; color: aqua; padding: 2px"><i class="fa fa-plus"></i></a></div>',

            // );
        }
        // $attributes = (json_decode($item['attribute'], true));
        // foreach ($attributes as $key => $value) {//mausac [den,do]
        //         $valueV = implode(',', $value['value']);
        //         $xhtml .= sprintf('<div class="form-group" id="attr">
        //                 <label  class="control-label col-md-3 col-sm-3 col-xs-12">%s</label>
        //                 <div class="col-md-6 col-sm-6 col-xs-12">
        //                     <input class="form-control input-tags-attr col-md-6 col-xs-12" name="attribute[]" type="text" value="%s">
        //                 </div>
        //                 </div>',$value['name'], $valueV
        //                 );
        // }
        
    }
                
@endphp

<div class="col-md-6 col-sm-12 col-xs-12">
<div class="x_panel ">
    @include('admin.templates.x_title', ['title' => 'Quản lý thuộc tính'])
    @if (!isset($item['id']))
        <div class="x_content_attribute" id="sortable">
            {!! FormTemplate::show($elements)  !!}
            <label id="attribute_name_label" class="label label-success attribute_name_label" style="font-size: 16px"></label>
            <div class="price-list list-draggable" style="margin-top: 10px">
            </div>
            <button type="button" class="btn btn-success btn-add-attribute-price" style="margin-top: 10px; display: none">Thêm thuộc tính</button>
        </div>
    @else
        <div class="x_content_attribute" id="sortable">
            {!! $xhtml !!}
        </div>
    @endif
    
</div>
</div>

<script>  
$(document).ready(function () {
    $('.input-tags-attr').tagsInput();
});
</script>