<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home Renovation Service | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  {!! Html::style('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') !!}
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> -->
  {!! Html::style('bower_components/AdminLTE/fontawesome/font-awesome.min.css') !!}
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
  {!! Html::style('bower_components/AdminLTE/ionicon/ionicons.min.css') !!}
  <!-- bootstrap datepicker -->
  {!! Html::style('bower_components/AdminLTE/plugins/datepicker/datepicker3.css') !!}
  <!-- DataTables -->
  {!! Html::style('bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css') !!}
  <!-- Select2 -->
  {!! Html::style('bower_components/AdminLTE/plugins/select2/select2.min.css') !!}
  <!-- Theme style -->
  {!! Html::style('bower_components/AdminLTE/dist/css/AdminLTE.min.css') !!}
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  {!! Html::style('bower_components/AdminLTE/dist/css/skins/skin-blue.min.css') !!}

  @yield('cssfiles')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Header -->
  @include('layouts.dashboard_header')

  <!-- Sidebar -->
  @include('layouts.dashboard_sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- Your Page Content Header Here -->
      @yield('content_header')
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 2.2.3 -->
  {!! Html::script('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') !!}
  <!-- Bootstrap 3.3.6 -->
  {!! Html::script('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') !!}
  <!-- bootstrap datepicker -->
  {!! Html::script('bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js') !!}
  <!-- AdminLTE App -->
  {!! Html::script('bower_components/AdminLTE/dist/js/app.min.js') !!}
  <!-- Select2 -->
  {!! Html::script('bower_components/AdminLTE/plugins/select2/select2.full.min.js') !!}
  <!-- DataTables -->
  {!! Html::script('bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js') !!}
  {!! Html::script('bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js') !!}

  @yield('jsfiles')
  <!-- Optionally, you can add Slimscroll and FastClick plugins.
       Both of these plugins are recommended to enhance the
       user experience. Slimscroll is required when using the
       fixed layout. -->

  <!-- Page Script Footer -->
  @yield('footer')

  <!-- Footer -->
  @include('layouts.dashboard_footer')
  
</div>
<!-- ./wrapper -->

</body>
</html>
