<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body>
<header class="header">
    @include('partials._nav')
</header>
<main class="main">
    @include('partials._hero')

    @yield('content')


    <footer class="footer has-background-dark">
        @include('partials._footer')
    </footer>
</main>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
