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
    <style>
    .Kineticaction {
        position: absolute;
        left: 50px;
        top: 50px;
        width:900px;
        font-weight:bold;
        color:#FFFFFF;
        font-family: 'Brush Script MT', cursive;
        font-size: 66px;
        font-style: normal;
        font-variant: normal;
        font-weight: 500;
        line-height: 53px;
        text-shadow: 4px 5px 6px rgba(0,0,0,0.8);
    }
    .Kineticaction2 {
        position: absolute;
        left: 100px;
        top: 200px;
        width:700px;
        font-weight:bold;
        color:#FFFFFF;
        font-family: 'Brush Script MT', cursive;
        font-size: 50px;
        font-style: normal;
        font-variant: normal;
        font-weight: 500;
        line-height: 53px;
        text-shadow: 4px 5px 6px rgba(0,0,0,0.8);
    }

     .Kineticaction3 {
            position: absolute;
            left: 100px;
            top: 200px;
            width:700px;
            font-weight:bold;
            color:#000000;
            font-family: 'Brush Script MT', cursive;
            font-size: 50px;
            font-style: normal;
            font-variant: normal;
            font-weight: 500;
            line-height: 53px;
            text-shadow: 4px 5px 6px rgba(255,255,255,0.8);
        }
        </style>
    </style>

</head>
<body style="width:1420px; height:1020px;" >
    {{--@include('layouts.navigation2')--}}
    @yield('content')
    {{--@yield('footer')--}}

</body>
</html>