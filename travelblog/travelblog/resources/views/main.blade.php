<!doctype html>
<html lang="en">
<head>
    @include('partials._head')
</head>

<body id="home">
<!--[if LTE IE 9]>
<div id="ie_warning"> Please update your browser in orderder to view the page properly</div>
<![endif]-->
<div id="wrapper">
    <header> <!-- header content -->
        @include('partials._nav')


    @yield('content')

    @include('partials._footer')
    @include('partials._javascript')

    @yield('scripts')
</div>
</body>
</html>
