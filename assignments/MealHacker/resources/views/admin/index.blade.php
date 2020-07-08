@extends('layouts.blog')

@section('content')

    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ $title }}
                </h1>
                <h2 class="subtitle">
                    Boats Table
                </h2>

            </div>
        </div>
        <form action="/admin/add_boat.php" method="get" novalidate>
            <button type="submit" class="button is-primary add">Add a boat</button>
        </form>
        <form action="/admin/boats.php" method="get" novalidate autocomplete="off">
            <div class="field has-addons has-addons-right">
                <div class="control">
                    <input name="search" id="search" class="input" type="text" placeholder="Search for a boat">

                </div>
                <div class="control">
                    <input type="submit" value="Search" class="button is-info is-light" />
                </div>

            </div>
        </form>
    </section>

    <div class="table-container">
        <table class="table is-stripped is-bordered is-hoverable">
            <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Description</th>
                <th>Preparation time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($recipes as $recipe)
                <tr>
                    <td><strong>{{ $recipe->name }}</strong></td>
                    <td>{{ $recipe->category->name }}</td>
                    <td>{{ $recipe->description }}</td>
                    <td>{{ $recipe->prep_time }}</td>
                    <td> </td>
                    <td> </td>

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
