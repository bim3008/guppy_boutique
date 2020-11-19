
@php
    use App\Helpers\Form as FormTemplate;
    use App\Helpers\Template;
    use App\Models\CategoryProductModel;
    
    $formInputAttr          = config('zvn.template.form_input');
    $formInputAttrDropzone  = config('zvn.template.form_input_dropzone');
    $formLabelAttr          = config('zvn.template.form_label');

    $categoryProductModel = new CategoryProductModel();
    $itemsCategoryProduct = $categoryProductModel->listItems(null, ['task' => 'admin-get-name-in-selectbox']);
    $itemsCategoryProduct['default'] = 'Chọn danh mục';
    ksort($itemsCategoryProduct);
    $statusValue      = ['default' => 'Chọn trạng thái', 'active' => config('zvn.template.status.active.name'), 'inactive' => config('zvn.template.status.inactive.name')];

    $inputHiddenID    = Form::hidden('id', $item['id']);
    $elements = [
        [
            'label'   => Form::label('name', 'Tên sản phẩm', $formLabelAttr),
            'element' => Form::text('name', $item['name'], $formInputAttr )
        ],
        [
            'label'   => Form::label('price', 'Giá sản phẩm', $formLabelAttr),
            'element' => Form::text('price', $item['price'],  $formInputAttr )
        ],
        [
            'label'   => Form::label('link', 'Link Youtube', $formLabelAttr),
            'element' => Form::text('link', $item['link'],  $formInputAttr )
        ],
        [
            'label'   => Form::label('category_product_id', 'Danh mục', $formLabelAttr),
            'element' => Form::select('category_product_id', $itemsCategoryProduct, $item['category_product_id'], $formInputAttr)
        ],
        [
            'label'   => Form::label('status', 'Trạng thái', $formLabelAttr),
            'element' => Form::select('status', $statusValue, $item['status'], $formInputAttr)
        ],
    ];
@endphp


<div class="col-md-6 col-sm-12 col-xs-12">
    <div class="x_panel">
        @include('admin.templates.x_title', ['title' => 'Quản lý sản phẩm'])
        <div class="x_content">
            {!! FormTemplate::show($elements)  !!}
        </div>
    </div>
</div>