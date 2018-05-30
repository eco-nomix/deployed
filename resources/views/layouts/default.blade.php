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

</head>
<body class="KineticGoldbody">

    @include('layouts.navigation3')
    @yield('content')
    @yield('footer')

</body>
</html>