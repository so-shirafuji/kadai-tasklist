@if (count($errors) > 0)
    <p>{{$errors}}</p>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif