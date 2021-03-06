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
<section class="hero is-primary is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                {{ $title }}
            </h1>
            <h2 class="subtitle">
                 {{ $student->first_name }} {{ $student->last_name }}
            </h2>
            <h2 class="subtitle">
                Student number: {{ $student->student_number }}
            </h2>
            <div class="columns">
                <div class="column is-one-fifth">
                    <img src="../../images/{{ $student->image }}" alt="Student image">
                </div>
            </div>
            <h2 class="subtitle">
                Email: {{$student->email}}
            </h2>
        </div>
    </div>
</section>
<div class="columns mx-6">


</div>
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
