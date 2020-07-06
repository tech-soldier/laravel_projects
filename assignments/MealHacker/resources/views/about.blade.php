@extends('layouts.main')

@section('content')

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ $title }}
                </h1>
                <h2 class="subtitle">
                    his blog is about the best recipes from around the world. I've accumulated them throughout my travel experience, and some I got from my family and friends.
                    In order to see the full list of recipes, go to the recipes menu.
                </h2>
                <a href="/recipes" class="is-uppercase">Find a recipe</a>
            </div>
        </div>
    </section>

@endsection
