<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
   <meta content="True" name="HandheldFriendly">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

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
    <script src="/js/cbdImages.js"></script>

</head>
<body class="cbd">
         @include('layouts.navigation_cbd')
         <div style="width:100%; border:solid 1px black; top:40; position:absolute; ">

        @yield('content')
        @yield('footer')
    </div>
    <script src="./js/mm-fontsize.js" type="text/javascript"></script>

</body>
</html>