@php
    use App\Helpers\Form as FormTemplate;
    use App\Helpers\Template;
    use App\Models\AttributeGroupModel; 
    use App\Models\AttributeModel; 
    $attributeModel = new AttributeModel();
    $attribute      = $attributeModel->getItem(null, ['task' => 'admin-get-name-attribute-group']);
    $formInputAttr  = config('zvn.template.form_input');
    $formLabelAttr  = config('zvn.template.form_label');
    $attributeGroup      = new AttributeGroupModel();
    $itemsAttributeGroup = $attributeGroup->listItems(null, ['task' => 'admin-list-items-in-selectbox']);
    $itemsAttributeGroup['default'] = 'Chọn nhóm thuộc tính';
    ksort($itemsAttributeGroup);
    $link = route($controllerName . '/getAttribute', ['id' => 'attribute_new']);
    $xhtml = null;
   
    if (!isset($item['id'])) {
        $elements = [
            [
                'label'   => Form::label('attribute_group', 'Nhóm thuộc tính', $formLabelAttr),
                'element' => Form::select('attribute_group_id', $itemsAttributeGroup, $item['attribute_group_id'], ['id' => 'attribute-group' , 'class' => 'form-control col-md-6 col-xs-12', 'onchange' => "showName('$link')"])
            ],
        ];
    }else{
        $attributes = (json_decode($item['attribute'], true));
        foreach ($attributes as $key => $value) {//mausac [den,do]
                $valueV = implode(',', $value['value']);
                $xhtml .= sprintf('<div class="form-group" id="attr">
                        <label  class="control-label col-md-3 col-sm-3 col-xs-12">%s</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control input-tags-attr col-md-6 col-xs-12" name="attribute[]" type="text" value="%s">
                        </div>
                        </div>',$value['name'], $valueV
                        );
        }
        
    }
                
@endphp

<div class="col-md-6 col-sm-12 col-xs-12">
<div class="x_panel ">
    @include('admin.templates.x_title', ['title' => 'Quản lý thuộc tính'])
    @if (!isset($item['id']))
        <div class="x_content_attribute" id="sortable">
            {!! FormTemplate::show($elements)  !!}
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