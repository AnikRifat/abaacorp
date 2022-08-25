<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $content->name }}</title>
        <link rel="shortcut icon" href="{{ asset('/') }}images/{{ $content->favicon }}">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/admin/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet"
          href="{{ asset('/') }}assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/admin/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/admin/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet"
          href="{{ asset('/') }}assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"
          id="theme-styles">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/admin/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/admin/plugins/summernote/summernote-bs4.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/admin/css/style.css">
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            @if ($errors->any())

            @foreach ($errors->all() as $error)
            <div id="toastsContainerTopRight" class="toasts-top-right fixed">
                <div class="toast bg-danger fade show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="mr-auto">error</strong>
                        <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close"><span
                              aria-hidden="true">×</span></button>
                    </div>
                    <div class="toast-body">{{ $error }}</div>
                </div>
            </div>
            @endforeach
            </ul>
        </div>
        @endif



        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('admin') }}" class="nav-link">Home</a>
                </li>

            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.inc.aside')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <section class="container-fluid">