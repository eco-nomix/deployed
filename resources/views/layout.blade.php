<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>@section('head_title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/editable.css">
    @yield('page_css')
</head>
<body>
    <div class="container-fluid">
        <div class="wrapper">
            <header class="row">
                @yield('header')
            </header>
        </div>

    </div>

    <footer class="footer">
        @yield('footer')
    </footer>

    <script src="/js/app.js"></script>

    @yield('javascript')
    @yield('layout-javascript')
    @yield('page_javascript')
    @yield('inline-scripts')
    <div id="main">
        <div class="row">
            @yield('navigation')
        </div>
        <div class="row">
            <div class="col-md-8">
                <h1>
                    @yield('title')<small>@yield('small_title')</small>
                </h1>
            </div>
            <div class="col-md-4 noprint">
                <div class="btn-toolbar pull-right">
                    <div class="btn-group-xs">
                        @yield('page-buttons')
                    </div>
                </div>
            </div>
        </div>
        @yield('sub-header')
        @include('layouts.flash')
        @yield('content')

    </div>
</body>
</html>