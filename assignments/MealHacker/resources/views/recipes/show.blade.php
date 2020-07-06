<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <title>{{ $title }}</title>
</head>
<body>
<header class="header">
    @include('partials._nav')
</header>
<section class="hero is-primary is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                {{ $title }}
            </h1>
            <h2 class="subtitle">
                Recipe
            </h2>
        </div>
    </div>
</section>
<section class="section main-content">
    <div class="container">
        <div class="columns">
            <div class="column is-two-thirds">

                <div class="card-posts">
                    <div class="card-post-item">

                        <div class="mb-4"><a class="button has-background-grey-lighter has-text-black is-radiusless is-uppercase">{{ $recipe->category->name }}</a></div>
                        <div class="card card-post is-shadowless">
                            <div class="card-post-header">
                                <h4 class="is-uppercase pb-2">Vegetarian: {{ $recipe->Vegetarian }}</h4>
                                <h4 class="is-uppercase pb-2">Preparation Time: {{ $recipe->prep_time }} min</h4>

                            </div>
                            <div class="card-image">
                                <figure class="image is-4by3"><img src="../../images/{{ $recipe->image }}" alt="Placeholder image" /></figure>
                            </div>
                            <div class="card-content is-paddingless">
                                <div class="content pt-5">
                                    <h2>Ingredients:</h2>
                                    {!! $recipe->ingredients !!}
                                </div>
                                <div class="content pt-5">
                                    <h2>Step by step instructions</h2>
                                    {!! $recipe->recipe !!}
                                </div>
                            </div>
                            <div class="card-post-header">
                                <h4 class="is-uppercase pb-4 pt-4">{{ date('l, F j, Y  \a\t g:i A', strtotime($recipe->created_at))  }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
