@extends('layouts.blog')

@section('content')
    <section class="section main-content">
        <div class="container">
            <div class="columns">
                <div class="column is-two-thirds">

                    <div class="card-posts">
                        @foreach($recipes as $recipe)
                            <div class="card-post-item">

                                <div class="mb-4"><a class="button has-background-grey-lighter has-text-black is-radiusless is-uppercase">{{ $recipe->category->name }}</a></div>
                                <div class="card card-post is-shadowless">
                                    <div class="card-post-header">
                                        <h1>{{ $recipe->name }}</h1>
                                        <h4 class="is-uppercase pb-2">{{ date('l, F j, Y  \a\t g:i A', strtotime($recipe->created_at))  }}</h4>
                                    </div>
                                    <div class="card-image">
                                        <figure class="image is-4by3"><img src="images/{{ $recipe->image }}" alt="Placeholder image" /></figure>
                                    </div>
                                    <div class="card-content is-paddingless">
                                        <div class="content pt-5">
                                            {!! $recipe->description !!}
                                        </div>
                                        <a href="/recipes/{{ $recipe->id  }}/show" class="button has-background-primary has-text-white is-radiusless">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
@endsection
