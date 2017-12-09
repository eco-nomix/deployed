<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $title }}</title>
    <meta name="description" content="@if($description){{$description}}@endif">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/editable.css">
    @yield('page_css')
    @yield('header')
    <script src="/js/jquery-1.12.1.min.js"></script>
    <script src="/js/editing.js"></script>
    <style type="text/css">
        .navbar-fixed-top{
            background-color: darkgreen;
        }
        .custom-header-h6{
            color: #fff;
        }
        .nav.navbar-nav a{
            color: #fff;
            margin-bottom: 0;
        }
        .nav.navbar-nav .dropdown-menu li:hover a:hover,.nav.navbar-nav .dropdown-menu li:hover a:hover{
            background-color: lightgreen;
        }
        .nav.navbar-nav li:hover a:hover{
            background-color: lightgreen;
        }
        .nav.navbar-nav li.dropdown ul.dropdown-menu li{
            background-color: darkgreen;
            border: 1px solid darkgreen;
        }
        .nav.navbar-nav li.dropdown:hover a:hover{
            background-color: lightgreen;
        }
        .nav > li > a{
            /*padding-left: 0px;*/
        }
        .navbar-nav{
            margin-left: -10px;
        }
        @media(min-width: 768px){
            .navbar-nav > li > a{
                padding-top: 0;
                padding-bottom: 10px;
            }
        }
        .navbar-nav .dropdown-menu{
            padding: 0;
            min-width: 100%;
        }
    </style>
</head>
<body class="economixbody">
    @include('layouts.navigation2')
    @yield('content')
    @yield('footer')

</body>
</html>