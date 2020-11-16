@php
  
    echo '<pre>';
    print_r($arrTable);
    echo '</pre>';

@endphp
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
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                           <div class="tile-stats">
                              <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                              <div class="count">179</div>
                              <h3>New Sign ups</h3>
                              <p>Lorem ipsum psdea itgum rixt.</p>
                           </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                           <div class="tile-stats">
                              <div class="icon"><i class="fa fa-comments-o"></i></div>
                              <div class="count">179</div>
                              <h3>New Sign ups</h3>
                              <p>Lorem ipsum psdea itgum rixt.</p>
                           </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                           <div class="tile-stats">
                              <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                              <div class="count">179</div>
                              <h3>New Sign ups</h3>
                              <p>Lorem ipsum psdea itgum rixt.</p>
                           </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                           <div class="tile-stats">
                              <div class="icon"><i class="fa fa-check-square-o"></i></div>
                              <div class="count">179</div>
                              <h3>New Sign ups</h3>
                              <p>Lorem ipsum psdea itgum rixt.</p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection