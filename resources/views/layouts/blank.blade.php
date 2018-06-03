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
        left: 200px;
        top: 50px;
        width:800px;
        font-weight:bold;
        color:#000000;
        font-family: 'Brush Script MT', cursive;
        font-size: 35px;
        font-style: normal;
        font-variant: normal;
        font-weight: 500;
        line-height: 53px;
    }
    .Kineticaction2 {
        position: absolute;
        left: 100px;
        top: 150px;
        width:700px;
        font-weight:bold;
        color:#c0c0c0;
        font-family: 'Brush Script MT', cursive;
        font-size: 35px;
        font-style: normal;
        font-variant: normal;
        font-weight: 500;
        line-height: 23px;
    }
    </style>

</head>
<body class="KineticGoldbody">
    {{--@include('layouts.navigation2')--}}
    @yield('content')
    @yield('footer')

</body>
</html>