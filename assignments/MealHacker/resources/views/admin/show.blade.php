@extends('layouts.blog')

@section('content')

    <section class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ $title }}
                </h1>
                <h2 class="subtitle">
                    {{ $recipe->name }}
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
                                        <h2>Short description:</h2>
                                        {!! $recipe->description !!}
                                    </div>
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
                <div class="column is-one-fifth ml-6 admin-sidebar">
                    <div class="columns">
                        <div class="column admin-date is-half">
                            <h2 class="mb-4 has-text-weight-medium">Created At:</h2>
                            <br>
                            <h2 class="mb-4 has-text-weight-medium">Updated At:</h2>
                            <br>
                            {!! Html::linkRoute('recipe.edit', 'Edit', array($recipe->id), array('class'=>'button admin-button is-primary')) !!}
                        </div>
                        <div class="column is-half">
                            <p class="mb-4">{{ $recipe->created_at }}</p>

                            <p class="mb-4">{{ $recipe->updated_at }}</p>
                            {!! Form::open(['route' => ['recipe.destroy', $recipe->id], 'method' => 'DELETE']) !!}

                            {!! Form::submit('Delete', ['class' => 'button admin-button is-danger']) !!}

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
