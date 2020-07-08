@extends('layouts.blog')

@section('content')
    <div class="form-container columns">
        <h1 class="is-uppercase pb-2 is-size-3">{{ $title }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(array('route' => 'recipe.store', 'data-parsley-validate' => '')) !!}
            <div class="field">
                {{ Form::label('name', 'Title:', array('class' => 'label')) }}
                {{ Form::text('name', null, array('class' => 'input is-info', 'required' => '', 'maxlength' => '255')) }}
            </div>

            <div class="field">
                {{ Form::label('description', 'Short Description:', array('class' => 'label'))}}
                {{Form::textarea('description', null, array('class' => 'textarea is-info is-small', 'required' => '')) }}
            </div>

            <div class="field">
                {{ Form::label('ingredients', 'Ingredients:', array('class' => 'label'))}}
                {{Form::textarea('ingredients', null, array('class' => 'textarea is-info is-small', 'required' => '')) }}
            </div>

            <div class="field">
                {{ Form::label('recipe', 'Step by step recipe:', array('class' => 'label'))}}
                {{Form::textarea('recipe', null, array('class' => 'textarea is-info is-medium', 'required' => '')) }}
            </div>

            <div class="field">
                {{ Form::label('prep_time', 'Preparation time (in minutes):', array('class' => 'label'))}}
                {{Form::number('prep_time', null, array('class' => 'input is-info', 'required' => '')) }}
            </div>

            <div class="field">
                <div class="control">
                    {{ Form::label('category_id', 'Category:', array('class' => 'label'))}}
                    {{Form::select('category_id', [ '1' => 'Ukrainian Cuisine',
                                                 '2' => 'Italian Cuisine',
                                                 '3' => 'Egyptian Cuisine',
                                                 '4' => 'Turkish Cuisine',
                                                 '5' => 'Japanese Cuisine'], 'U', array('class' => 'select is-primary'))}}
                </div>
            </div>

            <div class="field">
                {{ Form::label('vegetarian', 'Vegetarian', array('class' => 'radio'))}}
                {{ Form::radio('Vegetarian', 'yes')}}
            </div>

            <div class="field">
                <div class="file is-boxed">
                    {{ Form::label('file', 'Choose an image file: ', array('class' => 'label', 'style' => 'display: block'))}}
                    {{ Form::file('image'), array('class' => 'file-input', 'style' => 'display: block') }}
                </div>
            </div>

            <div class="field">
                {{ Form::submit('Create Recipe', array('class' => 'button is-warning')) }}
            </div>

        {!! Form::close() !!}
    </div>
@endsection
