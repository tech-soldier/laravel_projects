@extends('layouts.blog')

@section('content')

    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ $title }}
                </h1>
                <h2 class="subtitle">
                    {{ $h2 }}
                </h2>

            </div>
            <br>
            <a href="{{ route('recipe.create') }}" class="button ml-6">Add Recipe</a>
        </div>

    </section>

    <div class="table-container">
        <table class="table is-stripped is-bordered is-hoverable">
            <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Description</th>
                <th>Preparation time</th>
                <th>View</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($recipes as $recipe)
                <tr>
                    <td><strong>{{ $recipe->name }}</strong></td>
                    <td>{{ $recipe->category->name }}</td>
                    <td>{{ substr($recipe->description, 0, 50) }}{{ strlen($recipe->description) > 50 ? "..." : "" }}</td>
                    <td>{{ $recipe->prep_time }}</td>
                    <td><br> <a href="{{ route('recipe.show', $recipe->id) }}" class="button is-success">View</a></td>
                    <td><br>
                        {!! Html::linkRoute('recipe.edit', 'Edit', array($recipe->id), array('class'=>'button admin-button is-warning')) !!}
{{--                        {!! Form::open(['route' => ['recipe.destroy', $recipe->id], 'method' => 'DELETE']) !!}--}}

{{--                        {!! Form::submit('Delete', ['class' => 'button admin-button is-danger']) !!}--}}
                    </td>

                    @endforeach
                </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Description</th>
                <th>Preparation time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </tfoot>

        </table>
    </div>


@endsection
