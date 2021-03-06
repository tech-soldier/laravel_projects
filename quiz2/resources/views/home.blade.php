<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>
<body>
@include('partials._nav')
    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ $title }}
                </h1>
                <h2 class="subtitle">
                    PACE, The University of Winnipeg
                </h2>
            </div>
        </div>
    </section>
    <footer class="footer is-dark">
        <div class="content has-text-centered">
            <p>
                 Quiz 2 - PHP MVC 2020 by Inna Soldatkina
            </p>
        </div>
    </footer>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</body>
</html>
