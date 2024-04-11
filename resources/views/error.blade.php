


@section('content')
<div class="container">
    <div class="alert alert-danger">
        <h4>Error!</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
