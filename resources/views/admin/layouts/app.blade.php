<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>

    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')}}">

    <!-- Datatables Addons CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('vendor/plugins/datatables/media/css/dataTables.plugins.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/skin/default_skin/css/theme.css')}}">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/admin-tools/admin-forms/css/admin-forms.css')}}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('assets/img/favicon.ico')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        .success
        {
            color: green;
        }
        .error
        {
            color: red;
        }
        .content
        {
            width:900px;
            margin:0 auto;
        }
        /*#username*/
        /*{*/
            /*width:500px;*/
            /*border:solid 1px #000;*/
            /*padding:10px;*/
            /*font-size:14px;*/
        /*}*/
    </style>

</head>

<body class="dashboard-page sb-l-o sb-r-c">
<div id="skin-toolbox">
    <div class="panel">
        <div class="panel-heading">
        <span class="panel-icon">
          <i class="fa fa-gear text-primary"></i>
        </span>
            <span class="panel-title"> Theme Options</span>
        </div>
        <div class="panel-body pn">
            <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
                <li class="active">
                    <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>
                </li>
                <li>
                    <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                </li>
                <li>
                    <a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a>
                </li>
            </ul>
            <div class="tab-content p20 ptn pb15">
                <div role="tabpanel" class="tab-pane active" id="toolbox-header">
                    <form id="toolbox-header-skin">
                        <h4 class="mv20">Header Skins</h4>
                        <div class="skin-toolbox-swatches">
                            <div class="checkbox-custom checkbox-disabled fill mb5">
                                <input type="radio" name="headerSkin" id="headerSkin8" checked value="">
                                <label for="headerSkin8">Light</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-primary mb5">
                                <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">
                                <label for="headerSkin1">Primary</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-info mb5">
                                <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">
                                <label for="headerSkin3">Info</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-warning mb5">
                                <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">
                                <label for="headerSkin4">Warning</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-danger mb5">
                                <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
                                <label for="headerSkin5">Danger</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-alert mb5">
                                <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">
                                <label for="headerSkin6">Alert</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-system mb5">
                                <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">
                                <label for="headerSkin7">System</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-success mb5">
                                <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">
                                <label for="headerSkin2">Success</label>
                            </div>
                            <div class="checkbox-custom fill mb5">
                                <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">
                                <label for="headerSkin9">Dark</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
                    <form id="toolbox-sidebar-skin">
                        <h4 class="mv20">Sidebar Skins</h4>
                        <div class="skin-toolbox-swatches">
                            <div class="checkbox-custom fill mb5">
                                <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">
                                <label for="sidebarSkin3">Dark</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-disabled mb5">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                <label for="sidebarSkin1">Light</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-light mb5">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
                                <label for="sidebarSkin2">Lighter</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="toolbox-settings">
                    <form id="toolbox-settings-misc">
                        <h4 class="mv20 mtn">Layout Options</h4>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" checked="" id="header-option">
                                <label for="header-option">Fixed Header</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" checked="" id="sidebar-option">
                                <label for="sidebar-option">Fixed Sidebar</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="breadcrumb-option">
                                <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="breadcrumb-hidden">
                                <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                            </div>
                        </div>
                        <h4 class="mv20">Layout Options</h4>
                        <div class="form-group">
                            <div class="radio-custom mb5">
                                <input type="radio" id="fullwidth-option" checked name="layout-option">
                                <label for="fullwidth-option">Fullwidth Layout</label>
                            </div>
                        </div>
                        <div class="form-group mb20">
                            <div class="radio-custom radio-disabled mb5">
                                <input type="radio" id="boxed-option" name="layout-option" disabled>
                                <label for="boxed-option">Boxed Layout
                                    <b class="text-muted">(Coming Soon)</b>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-group mn br-t p15">
                <a href="#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>
            </div>
        </div>
    </div>
</div>
<!-- End: Theme Settings Pane -->

<!-- Start: Main -->
<div id="main">
    <!-- Start: Header -->
@include('admin.includes.header')
<!-- End: Header -->

    <!-- Start: Sidebar Left -->
@include('admin.includes.sidebar')
<!-- End: Sidebar Left -->

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
        <!-- Begin: Content -->
        @yield('content')

        <!-- End: Content -->

        <!-- Begin: Page Footer -->
    @include('admin.includes.footer')
    <!-- End: Page Footer -->

    </section>
    <!-- End: Content-Wrapper -->

    <!-- Start: Right Sidebar -->
    <aside id="sidebar_right" class="nano affix">

        <!-- Start: Sidebar Right Content -->
        <div class="sidebar-right-content nano-content">

            <div class="tab-block sidebar-block br-n">
                <ul class="nav nav-tabs tabs-border nav-justified hidden">
                    <li class="active">
                        <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                    </li>
                    <li>
                        <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                    </li>
                    <li>
                        <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                    </li>
                </ul>
                <div class="tab-content br-n">
                    <div id="sidebar-right-tab1" class="tab-pane active">

                        <h5 class="title-divider text-muted mb20"> Server Statistics
                            <span class="pull-right"> 2013
                  <i class="fa fa-caret-down ml5"></i>
                </span>
                        </h5>
                        <div class="progress mh5">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                <span class="fs11">DB Request</span>
                            </div>
                        </div>
                        <div class="progress mh5">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                <span class="fs11 text-left">Server Load</span>
                            </div>
                        </div>
                        <div class="progress mh5">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                <span class="fs11 text-left">Server Connections</span>
                            </div>
                        </div>

                        <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                        <div class="row">
                            <div class="col-xs-5">
                                <h3 class="text-primary mn pl5">132</h3>
                            </div>
                            <div class="col-xs-7 text-right">
                                <h3 class="text-success-dark mn">
                                    <i class="fa fa-caret-up"></i> 13.2% </h3>
                            </div>
                        </div>

                        <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                        <div class="row">
                            <div class="col-xs-5">
                                <h3 class="text-primary mn pl5">212</h3>
                            </div>
                            <div class="col-xs-7 text-right">
                                <h3 class="text-success-dark mn">
                                    <i class="fa fa-caret-up"></i> 25.6% </h3>
                            </div>
                        </div>

                        <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                        <div class="row">
                            <div class="col-xs-5">
                                <h3 class="text-primary mn pl5">82.5</h3>
                            </div>
                            <div class="col-xs-7 text-right">
                                <h3 class="text-danger mn">
                                    <i class="fa fa-caret-down"></i> 17.9% </h3>
                            </div>
                        </div>

                        <h5 class="title-divider text-muted mt40 mb20"> User Activity
                            <span class="pull-right text-primary fw600">1 Hour</span>
                        </h5>

                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="assets/img/avatars/6.jpg" class="mw40 br64" alt="holder-img">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading">Article
                                    <small class="text-muted">- 08/16/22</small>
                                </h5>Updated 36 days ago by
                                <a class="text-system" href="#"> Max </a>
                            </div>
                        </div>
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="assets/img/avatars/4.jpg" class="mw40 br64" alt="holder-img">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading">Richard
                                    <small class="text-muted">@cloudesigns</small>
                                    <small class="pull-right text-muted">6h</small>
                                </h5>Updated 36 days ago by
                                <a class="text-system" href="#"> Max </a>
                            </div>
                        </div>
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="assets/img/avatars/3.jpg" class="mw40 br64" alt="holder-img">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading">1,610 kcal
                                    <span class="fa fa-caret-down text-primary pl5"></span>
                                </h5>Updated 36 days ago by
                                <a class="text-system" href="#"> Max </a>
                            </div>
                        </div>
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="assets/img/avatars/2.jpg" class="mw40 br64" alt="holder-img">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading">1,610 kcal
                                    <span class="label label-xs label-system ml5">Featured</span>
                                </h5>Updated 36 days ago by
                                <a class="text-system" href="#"> Max </a>
                            </div>
                        </div>
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="assets/img/avatars/5.jpg" class="mw40 br64" alt="holder-img">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading">1,610 kcal</h5>
                                Updated ago by
                                <a class="text-system" href="#"> Max </a>
                            </div>
                            <a class="media-right pl30" href="#">
                                <span class="fa fa-pencil text-muted mb5"></span>
                                <br>
                                <span class="fa fa-remove text-danger-light"></span>
                            </a>
                        </div>
                    </div>
                    <div id="sidebar-right-tab2" class="tab-pane"></div>
                    <div id="sidebar-right-tab3" class="tab-pane"></div>
                </div>
                <!-- end: .tab-content -->
            </div>

        </div>
    </aside>
    <!-- End: Right Sidebar -->

</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script src="{{url('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
<script src="{{url('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

<script src="{{url('vendor/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>

<!-- Datatables Tabletools addon -->
<script src="{{url('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>

<!-- Datatables ColReorder addon -->
<script src="{{url('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')}}"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src="{{url('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>



<!-- HighCharts Plugin -->
<script src="{{url('vendor/plugins/highcharts/highcharts.js')}}"></script>

<!-- Sparklines Plugin -->
<script src="{{url('vendor/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<script src="{{url('assets/admin-tools/admin-forms/js/jquery-ui-datepicker.min.js')}}"></script>

<!-- Simple Circles Plugin -->
<script src="{{url('vendor/plugins/circles/circles.js')}}"></script>

<!-- JvectorMap Plugin + US Map (more maps in plugin/assets folder) -->
<script src="{{url('vendor/plugins/jvectormap/jquery.jvectormap.min.js')}}"></script>
<script src="{{url('vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js')}}"></script>

<!-- Theme Javascript -->
<script src="{{url('assets/js/utility/utility.js')}}"></script>
<script src="{{url('assets/js/demo/demo.js')}}"></script>
<script src="{{url('assets/js/main.js')}}"></script>

<!-- Widget Javascript -->
<script src="{{url('assets/js/demo/widgets.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        "use strict";
        Core.init();
        Demo.init();
        $('.admin-panels').adminpanel({
            grid: '.admin-grid',
            draggable: true,
            preserveGrid: true,
            mobile: false,
            onStart: function() {
            },
            onFinish: function() {
                $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');
                demoHighCharts.init();
                runVectorMaps();
            },
            onSave: function() {
                $(window).trigger('resize');
            }
        });

        function runVectorMaps() {
            var runJvectorMap = function() {
                var mapData = [900, 700, 350, 500];
                $('#WidgetMap').vectorMap({
                    map: 'us_lcc_en',
                    backgroundColor: 'transparent',
                    series: {
                        markers: [{
                            attribute: 'r',
                            scale: [3, 7],
                            values: mapData
                        }]
                    },
                    regionStyle: {
                        initial: {
                            fill: '#E5E5E5'
                        },
                        hover: {
                            "fill-opacity": 0.3
                        }
                    },
                    markers: [{
                        latLng: [37.78, -122.41],
                        name: 'San Francisco,CA'
                    }, {
                        latLng: [36.73, -103.98],
                        name: 'Texas,TX'
                    }, {
                        latLng: [38.62, -90.19],
                        name: 'St. Louis,MO'
                    }, {
                        latLng: [40.67, -73.94],
                        name: 'New York City,NY'
                    }],
                    markerStyle: {
                        initial: {
                            fill: '#a288d5',
                            stroke: '#b49ae0',
                            "fill-opacity": 1,
                            "stroke-width": 10,
                            "stroke-opacity": 0.3,
                            r: 3
                        },
                        hover: {
                            stroke: 'black',
                            "stroke-width": 2
                        },
                        selected: {
                            fill: 'blue'
                        },
                        selectedHover: {}
                    },
                });
                var states = ['US-CA', 'US-TX', 'US-MO',
                    'US-NY'
                ];
                var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
                var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
                $.each(states, function(i, e) {
                    $("#WidgetMap path[data-code=" + e + "]").css({
                        fill: colors[i]
                    });
                });
                $('#WidgetMap').find('.jvectormap-marker')
                    .each(function(i, e) {
                        $(e).css({
                            fill: colors2[i],
                            stroke: colors2[i]
                        });
                    });
            }

            if ($('#WidgetMap').length) {
                runJvectorMap();
            }
        }

        $('#datatable2').dataTable({
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": "",
                    "sNext": ""
                }
            },
            "iDisplayLength": 5,
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
                "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            }
        });

        $("#datepicker1").datepicker({
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            showButtonPanel: false,
            beforeShow: function(input, inst) {
                var newclass = 'admin-form';
                var themeClass = $(this).parents('.admin-form').attr('class');
                var smartpikr = inst.dpDiv.parent();
                if (!smartpikr.hasClass(themeClass)) {
                    inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                }
            }
        });

        $('#country').change(function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:"GET",
                    url:"{{url('api/get-state-list')}}?country_id="+countryID,
                    success:function(res){
                        if(res){
                            $("#state").empty();
                            $("#state").append('<option>Select Advisor....</option>');
                            $.each(res,function(key,value){
                                $("#state").append('<option value="'+key+'">'+value+'</option>');
                            });

                        }else{
                            $("#state").empty();
                        }
                    }
                });
            }else{
                $("#state").empty();
                $("#city").empty();
            }
        });

        // ------------------------ Mobile Number Availablity ----------------------------------------

        $('#username').keyup(function(){
            var username = $(this).val(); // Get username textbox using $(this)
            var Result = $('#result'); // Get ID of the result DIV where we display the results
            if(username.length > 2) { // if greater than 2 (minimum 3)
                Result.html('Loading...'); // you can use loading animation here
//                var dataPass = 'action=availability&username='+username;
                $.ajax({ // Send the username val to available.php
                    type : 'GET',
//                    data : dataPass,
                    url:"{{url('api/get-mobile')}}?mobile="+username,
                    success: function(responseText){ // Get the result
                        if(responseText == 0){
                            Result.html('<span class="success">Available</span>');
                        }
                        else if(responseText > 0){
                            Result.html('<span class="error">Taken</span>');
                        }
                        else{
                            alert('Problem with sql query');
                        }
                    }
                });
            }else{
                Result.html('Enter 12 Digits');
            }
            if(username.length == 0) {
                Result.html('');
            }
        });
        $("#username").on("keypress keyup blur",function (event) {
            $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

        $('#email').keyup(function(){
            var email = $(this).val(); // Get username textbox using $(this)
            var Result1 = $('#result1'); // Get ID of the result DIV where we display the results
            if(email.length > 2) { // if greater than 2 (minimum 3)
                Result1.html('Loading...'); // you can use loading animation here
//                var dataPass = 'action=availability&username='+username;
                $.ajax({ // Send the username val to available.php
                    type : 'GET',
//                    data : dataPass,
                    url:"{{url('api/get-email')}}?email="+email,
                    success: function(responseText){ // Get the result
                        if(responseText == 0){
                            Result1.html('<span class="success">Available</span>');
                        }
                        else if(responseText > 0){
                            Result1.html('<span class="error">Taken</span>');
                        }
                        else{
                            alert('Problem with sql query');
                        }
                    }
                });
            }else{
                Result1.html('Enter 12 Digits');
            }
            if(email.length == 0) {
                Result1.html('');
            }
        });





    });
</script>

<!-- END: PAGE SCRIPTS -->

</body>

</html>
