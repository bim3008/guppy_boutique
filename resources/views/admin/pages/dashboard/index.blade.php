@extends('admin.main')
@section('content')
    <div class="page-header zvn-page-header clearfix">
        <div class="zvn-page-header-title">
            <h3>Dashboard</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Dashboard</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row top_tiles">
                        @foreach($arrTable as $key => $value)
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                <div class="icon"><i class="fa {!! $value['icon'] !!}"></i></div>
                                <div class="count">{!! $value['total']->count !!}</div>
                                <h3>{!! $value['name'] !!}</h3>
                                <a href="{!! $value['link'] !!}"><p>Đi đến trang</p></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                @include('admin.templates.x_title', ['title' => 'Yêu cầu liên hệ'])
                @include('admin.pages.dashboard.list')
            </div>
        </div>
    </div>
@endsection