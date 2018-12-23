<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRM::CyberDuck</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset("plugins/bootstrap/dist/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("plugins/font-awesome/css/font-awesome.min.css") }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset("plugins/Ionicons/css/ionicons.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("css/AdminLTE.min.css") }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset("css/skins/_all-skins.min.css") }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        @include("layouts.header")
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            @include("layouts.sidebar")
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield("title-page")
            @yield("breadcrumb")
        </section>

        <!-- Main content -->
        <section class="content">
            @yield("content")
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        @include("layouts.footer")

    </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset("plugins/jquery/dist/jquery.min.js") }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset("plugins/bootstrap/dist/js/bootstrap.min.js") }}"></script>
<!-- SlimScroll -->
<script src="{{ asset("plugins/jquery-slimscroll/jquery.slimscroll.min.js") }}"></script>
<!-- FastClick -->
<script src="{{ asset("plugins/fastclick/lib/fastclick.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("js/adminlte.min.js") }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset("js/demo.js") }}"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>
</body>
</html>
