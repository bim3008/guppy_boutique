@extends('admin.main')
@php
    use App\Helpers\Form as FormTemplate;
    use App\Helpers\Template;

    $formInputAttr = config('zvn.template.form_input');
    $formLabelAttr = config('zvn.template.form_label');

    $statusValue      = ['default' => 'Chọn trạng thái', 'active' => config('zvn.template.status.active.name'), 'inactive' => config('zvn.template.status.inactive.name')];
    $priceValue       = ['default' => 'Chọn giá tiền'  , 
                          '10000'  => config('zvn.template.price.10000.name'),
                          '20000'  => config('zvn.template.price.20000.name'),
                          '30000'  => config('zvn.template.price.30000.name'), 
                          '50000'  => config('zvn.template.price.50000.name'), 
                          '1000000'=> config('zvn.template.price.100000.name'), 
                        ];
    $inputHiddenID    = Form::hidden('id', $item['id']);
                    
    $elements = [
        [
            'label'   => Form::label('name', 'Tên thành phố ', $formLabelAttr),
            'element' => Form::text('name', $item['name'], $formInputAttr )
        ],[
            'label'   => Form::label('price', 'Giá tiền', $formLabelAttr),
            'element' => Form::select('price' ,$priceValue , $item['price'],  $formInputAttr )
        ],[
            'label'   => Form::label('status', 'Status', $formLabelAttr),
            'element' => Form::select('status', $statusValue ,$item['status'], $formInputAttr )
        ],[
            'element' => $inputHiddenID . Form::submit('Save', ['class'=>'btn btn-success']),
            'type'    => "btn-submit"
        ]
    ];
@endphp

@section('content')
    @include ('admin.templates.page_header', ['pageIndex' => false])
    @include ('admin.templates.error')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                @include('admin.templates.x_title', ['title' => 'Form'])
                <div class="x_content">
                    {{ Form::open([
                        'method'         => 'POST', 
                        'url'            => route("$controllerName/save"),
                        'accept-charset' => 'UTF-8',
                        'enctype'        => 'multipart/form-data',
                        'class'          => 'form-horizontal form-label-left',
                        'id'             => 'main-form' ])  }}
                        {!! FormTemplate::show($elements)  !!}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
