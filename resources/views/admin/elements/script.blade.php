<script src="{{ asset('admin/js/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin/asset/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset('admin/asset/nprogress/nprogress.js') }}"></script>
<script src="{{ asset('admin/asset/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<script src="{{ asset('admin/asset/iCheck/icheck.min.js') }}"></script>
<script src="{{asset('admin/js/ckeditor/ckeditor.js')}}"></script>
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
<script src="{{ asset('admin/js/my-js.js') }}"></script>
<script src="{{ asset('admin/js/ajax.js') }}"></script>
<script src="{{ asset('admin/js/notify.js') }}"></script>
<script src="{{ asset('admin/js/notify.min.js') }}"></script>
<script src="{{ asset('admin/js/my-custom.js') }}"></script>
{{-- <div class="daterangepicker dropdown-menu ltr show-calendar opensright" style="top: 1218px; left: 341px; right: auto; display: block;"><div class="calendar left"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Jan 2016</th><th></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">27</td><td class="off available" data-title="r0c1">28</td><td class="off available" data-title="r0c2">29</td><td class="off available" data-title="r0c3">30</td><td class="off available" data-title="r0c4">31</td><td class="available" data-title="r0c5">1</td><td class="weekend available" data-title="r0c6">2</td></tr><tr><td class="weekend available" data-title="r1c0">3</td><td class="available" data-title="r1c1">4</td><td class="available" data-title="r1c2">5</td><td class="active start-date available" data-title="r1c3">6</td><td class="in-range available" data-title="r1c4">7</td><td class="in-range available" data-title="r1c5">8</td><td class="weekend in-range available" data-title="r1c6">9</td></tr><tr><td class="weekend in-range available" data-title="r2c0">10</td><td class="in-range available" data-title="r2c1">11</td><td class="in-range available" data-title="r2c2">12</td><td class="in-range available" data-title="r2c3">13</td><td class="in-range available" data-title="r2c4">14</td><td class="in-range available" data-title="r2c5">15</td><td class="weekend in-range available" data-title="r2c6">16</td></tr><tr><td class="weekend in-range available" data-title="r3c0">17</td><td class="in-range available" data-title="r3c1">18</td><td class="in-range available" data-title="r3c2">19</td><td class="in-range available" data-title="r3c3">20</td><td class="in-range available" data-title="r3c4">21</td><td class="in-range available" data-title="r3c5">22</td><td class="weekend in-range available" data-title="r3c6">23</td></tr><tr><td class="weekend in-range available" data-title="r4c0">24</td><td class="in-range available" data-title="r4c1">25</td><td class="in-range available" data-title="r4c2">26</td><td class="in-range available" data-title="r4c3">27</td><td class="in-range available" data-title="r4c4">28</td><td class="in-range available" data-title="r4c5">29</td><td class="weekend in-range available" data-title="r4c6">30</td></tr><tr><td class="weekend in-range available" data-title="r5c0">31</td><td class="off in-range available" data-title="r5c1">1</td><td class="off in-range available" data-title="r5c2">2</td><td class="off in-range available" data-title="r5c3">3</td><td class="off active end-date in-range available" data-title="r5c4">4</td><td class="off available" data-title="r5c5">5</td><td class="weekend off available" data-title="r5c6">6</td></tr></tbody></table></div></div><div class="calendar right"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Feb 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off in-range available" data-title="r0c0">31</td><td class="in-range available" data-title="r0c1">1</td><td class="in-range available" data-title="r0c2">2</td><td class="in-range available" data-title="r0c3">3</td><td class="active end-date in-range available" data-title="r0c4">4</td><td class="available" data-title="r0c5">5</td><td class="weekend available" data-title="r0c6">6</td></tr><tr><td class="weekend available" data-title="r1c0">7</td><td class="available" data-title="r1c1">8</td><td class="available" data-title="r1c2">9</td><td class="available" data-title="r1c3">10</td><td class="available" data-title="r1c4">11</td><td class="available" data-title="r1c5">12</td><td class="weekend available" data-title="r1c6">13</td></tr><tr><td class="weekend available" data-title="r2c0">14</td><td class="available" data-title="r2c1">15</td><td class="available" data-title="r2c2">16</td><td class="available" data-title="r2c3">17</td><td class="available" data-title="r2c4">18</td><td class="available" data-title="r2c5">19</td><td class="weekend available" data-title="r2c6">20</td></tr><tr><td class="weekend available" data-title="r3c0">21</td><td class="available" data-title="r3c1">22</td><td class="available" data-title="r3c2">23</td><td class="available" data-title="r3c3">24</td><td class="available" data-title="r3c4">25</td><td class="available" data-title="r3c5">26</td><td class="weekend available" data-title="r3c6">27</td></tr><tr><td class="weekend available" data-title="r4c0">28</td><td class="available" data-title="r4c1">29</td><td class="off available" data-title="r4c2">1</td><td class="off available" data-title="r4c3">2</td><td class="off available" data-title="r4c4">3</td><td class="off available" data-title="r4c5">4</td><td class="weekend off available" data-title="r4c6">5</td></tr><tr><td class="weekend off available" data-title="r5c0">6</td><td class="off available" data-title="r5c1">7</td><td class="off available" data-title="r5c2">8</td><td class="off available" data-title="r5c3">9</td><td class="off available" data-title="r5c4">10</td><td class="off available" data-title="r5c5">11</td><td class="weekend off available" data-title="r5c6">12</td></tr></tbody></table></div></div><div class="ranges"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>
<div class="daterangepicker dropdown-menu ltr show-calendar opensright"><div class="calendar left"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_start" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i><div class="calendar-time"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"></div></div><div class="calendar right"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i><div class="calendar-time"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"></div></div><div class="ranges"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" disabled="disabled" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div> --}}
