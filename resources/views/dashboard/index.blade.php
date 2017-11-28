<!DOCTYPE html>
<html>
<head>

	<title>Sitem Informasi Kotak Saran</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewpo"><link rel="stylesheet" href="{{asset('template/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  	<link rel="stylesheet" href="{{asset('template/bower_components/font-awesome/css/font-awesome.min.css')}}">
  	<link rel="stylesheet" href="{{asset('template/bower_components/Ionicons/css/ionicons.min.css')}}">
  	<link rel="stylesheet" href="{{asset('template/dist/css/AdminLTE.min.css')}}">
  	<link rel="stylesheet" href="{{asset('template/dist/css/skins/_all-skins.min.css')}}">
  	<link rel="stylesheet" href="{{asset('template/bower_components/morris.js/morris.css')}}">
  	<link rel="stylesheet" href="{{asset('template/bower_components/jvectormap/jquery-jvectormap.css')}}">
  	<link rel="stylesheet" href="{{asset('template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  	<link rel="stylesheet" href="{{asset('template/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  	<link rel="stylesheet" href="{{asset('template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body>

	<div class="content-wrapper">
		@yield('main')
	</div>

</body>

	<script src="{{asset('template/bower_components/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{asset('template/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
	<script>
  	$.widget.bridge('uibutton', $.ui.button);
	</script>
	<script src="{{asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('template/bower_components/raphael/raphael.min.js')}}"></script>
	<script src="{{asset('template/bower_components/morris.js/morris.min.js')}}"></script>
	<script src="{{asset('template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
	<script src="{{asset('template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('template/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
	<script src="{{asset('template/bower_components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('template/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
	<script src="{{asset('template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
	<script src="{{asset('template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('template/bower_components/fastclick/lib/fastclick.js')}}"></script>	
	<script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
	<script src="{{asset('template/dist/js/pages/dashboard.js')}}"></script>
	<script src="{{asset('template/dist/js/demo.js')}}"></script>

</html>