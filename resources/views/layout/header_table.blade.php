<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"> --}}
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/node_modules/material-design-icons-iconfont/dist/material-design-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('font/font-awesome/css/font-awesome.css') }}">


    <!-- Bootstrap Core Css -->
    <link href="{{ asset('Admin/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">


    <!-- Waves Effect Css -->
    <link href="{{ asset('Admin/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('Admin/plugins/animate-css/animate.css')}}" rel="stylesheet" />
    <link href="{{ asset('Admin/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link href="{{ asset('Admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset('Admin/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('Admin/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-red">