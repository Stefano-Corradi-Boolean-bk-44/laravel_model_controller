@extends('layouts.main')


@section('content')

<div class="container">
    <h1>Home</h1>
    <h2>Ciao {{ $name }} {{ $lastname }}</h2>

    <ul>
        @foreach ($films as $film )
            <li>{{ $film }}</li>
        @endforeach
    </ul>

</div>

@endsection
