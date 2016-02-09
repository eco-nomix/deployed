<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>@section('head_title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/editable.css">
    @yield('page_css')
    @yield('header')
</head>
<body class="economixbody">
    @include('layouts.navigation2')
    @yield('content')
    @yield('footer')

</body>
</html>