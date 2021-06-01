<!DOCTYPE html>
<html class=" ">
   <head>
      <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 4.1
         * This file is part of Ultra Admin Theme.
         -->
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta charset="utf-8" />
      <title>Admin : Dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta content="" name="description" />
      <meta content="" name="author" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon" />
      <!-- Favicon -->
      <link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/apple-touch-icon-57-precomposed.png')}}">
      <!-- For iPhone -->
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/images/apple-touch-icon-114-precomposed.png')}}">
      <!-- For iPhone 4 Retina display -->
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/images/apple-touch-icon-72-precomposed.png')}}">
      <!-- For iPad -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/images/apple-touch-icon-144-precomposed.png')}}">
      <!-- For iPad Retina display -->
      <!-- CORE CSS FRAMEWORK - START -->
      <link href="{{asset('assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{asset('assets/plugins/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{asset('assets/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css"/>
      <!-- CORE CSS FRAMEWORK - END -->
      <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
      <link href="{{asset('assets/plugins/morris-chart/css/morris.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <link href="{{asset('assets/plugins/jquery-ui/smoothness/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <link href="{{asset('assets/plugins/rickshaw-chart/css/graph.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <link href="{{asset('assets/plugins/rickshaw-chart/css/detail.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <link href="{{asset('assets/plugins/rickshaw-chart/css/legend.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <link href="{{asset('assets/plugins/rickshaw-chart/css/extensions.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <link href="{{asset('assets/plugins/rickshaw-chart/css/rickshaw.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <link href="{{asset('assets/plugins/rickshaw-chart/css/lines.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <link href="{{asset('assets/plugins/icheck/skins/minimal/white.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
      <!-- CORE CSS TEMPLATE - START -->
      <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css"/>
      <!-- CORE CSS TEMPLATE - END -->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   </head>
   <!-- END HEAD -->
   <!-- BEGIN BODY -->
   <body class=" ">
      <!-- START TOPBAR -->
       
         {{View::make('admin/header') }} 
         {{View::make('admin/side_bar') }}  -->
         <!-- @yield('block')
         @yield('active')
         @yield('content')
         
         @yield('edit')
         @yield('delete')
         -->
         @yield('form')
         @yield('script')
       <!-- CORE JS FRAMEWORK - START  -->
      <script src="{{asset('assets/js/jquery-1.11.2.min.js')}}" type="text/javascript"></script> 
      <script src="{{asset('assets/js/jquery.easing.min.js')}}" type="text/javascript"></script> 
      <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script> 
      <script src="{{asset('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>  
      <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}" type="text/javascript"></script> 
      <script src="{{asset('assets/plugins/viewport/viewportchecker.js')}}" type="text/javascript"></script>  
      <!-- CORE JS FRAMEWORK - END --> 
      <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
      <script src="{{asset('assets/plugins/rickshaw-chart/vendor/d3.v3.js')}}" type="text/javascript"></script> 
      <script src="{{asset('assets/plugins/jquery-ui/smoothness/jquery-ui.min.js')}}" type="text/javascript"></script> 
      <script src="{{asset('assets/plugins/rickshaw-chart/js/Rickshaw.All.js')}}"></script>
      <script src="{{asset('assets/plugins/sparkline-chart/jquery.sparkline.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/plugins/easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/plugins/morris-chart/js/raphael-min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/plugins/gauge/gauge.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/plugins/icheck/icheck.min.js')}}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
      <!-- CORE TEMPLATE JS - START --> 
      <script src="{{asset('assets/js/scripts.js')}}" type="text/javascript"></script> 
      <!-- END CORE TEMPLATE JS - END --> 
      <!-- Sidebar Graph - START --> 
      <script src="{{asset('assets/plugins/sparkline-chart/jquery.sparkline.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/js/chart-sparkline.js')}}" type="text/javascript"></script>
      <!-- Sidebar Graph - END --> 
      <!-- General section box modal start -->
      <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
         <div class="modal-dialog animated bounceInDown">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Section Settings</h4>
               </div>
               <div class="modal-body">
                  Body goes here...
               </div>
               <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                  <button class="btn btn-success" type="button">Save changes</button>
               </div>
            </div>
         </div>
      </div>
      <!-- modal end -->
   </body>
</html>
<script type="text/javascript"></script>