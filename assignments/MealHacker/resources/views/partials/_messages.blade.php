@if (Session::has('success'))
    <div class="notification is-success">
        <button class="delete"></button>
        <strong>Success: </strong> {{ Session::get('success') }}

    </div>
@endif

@if ($errors->any())
    <div class="notification is-danger">
        <button class="delete"></button>
        <strong>Errors: </strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
