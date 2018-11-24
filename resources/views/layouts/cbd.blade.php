<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
   <meta content="True" name="HandheldFriendly">
   <meta name="viewport" content="width=device-width, initial-scale=0.666667, maximum-scale=0.666667, user-scalable=0">
   <meta name="viewport" content="width=device-width">
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
    @yield('content')
    @yield('footer')

</body>
</html>