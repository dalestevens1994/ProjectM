<!-- Check session variable for flash message -->
@if (Session::has('success'))

    <div class="alert alert-success" role="alert">
        <strong>Success!</strong> {{ Session::get('success') }}
    </div>

@endif

<!-- Only show if there are more than '0' errors -->
@if (count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <strong>Errors:</strong>
        <ul>
            <!-- Loop through all the errors in the variable -->
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>

@endif