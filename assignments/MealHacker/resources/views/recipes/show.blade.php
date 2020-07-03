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
    <nav class="navbar is-dark">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item has-text-white is-size-4 has-text-weight-bold" href="https://biron.bironthemes.com">
                    MealHacker
                </a>
                <span role="button" tabindex="0" class="navbar-burger burger has-text-white" data-target="navbar-menu">
          <span></span>
          <span></span>
          <span></span>
        </span>
            </div>
            <div id="navbar-menu" class="navbar-menu">
                <div class="navbar-end">
                    <!-- Loop through the navigation items -->
                    <a class="navbar-item nav-home is-active" href="">Home</a>
                    <a class="navbar-item nav-style-guide" href="">Recipes</a>
                    <a class="navbar-item nav-features" href="">About</a>
                    <a class="navbar-item nav-tech" href="https://biron.bironthemes.com/tag/technology/">Contact</a>


                </div>
            </div>
        </div>
    </nav>
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

                        <div class="mb-4"><a class="button has-background-grey-lighter has-text-black is-radiusless is-uppercase">Ukrainian</a></div>
                        <div class="mb-4"><a class="button has-background-grey-lighter has-text-black is-radiusless is-uppercase">{{ $recipe->prep_time }} min</a></div>
                        <div class="card card-post is-shadowless">
                            <div class="card-post-header">
                                <h1>{{ $recipe->name }}</h1>
                                <h4 class="is-uppercase pb-2">Vegetarian: {{ $recipe->Vegetarian }}</h4>
                                <h4 class="is-uppercase pb-2">{{ date('l, F j, Y  \a\t g:i A', strtotime($recipe->created_at))  }}</h4>
                            </div>
                            <div class="card-image">
                                <figure class="image is-4by3"><img src="../../images/{{ $recipe->image }}" alt="Placeholder image" /></figure>
                            </div>
                            <div class="card-content is-paddingless">
                                <div class="content pt-5">
                                    {!! $recipe->ingredients !!}
                                </div>
                                <div class="content pt-5">
                                    {!! $recipe->recipe !!}
                                </div>

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
