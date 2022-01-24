@extends('layouts.main')


@section('content')

<div class="container">
    <h1>Lista studenti</h1>
    <h2>Ciao {{ $student->name }} {{ $student->surname }}</h2>
    <h2>Studente trovato con find: {{ $student_find->name }} {{ $student_find->surname }}</h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Cognome</th>
            <th scope="col">Matricola</th>
          </tr>
        </thead>
        <tbody>

            @forelse ($students as $student)
            <tr>
                <th scope="row">{{ $student->id }}</th>
                <td>{{ $student->name }}</td>
                <td>{{ $student->surname }}</td>
                <td>{{ $student->registration_number }}</td>
            </tr>
            @empty
                <h3>Nessun risultato trovato</h3>
            @endforelse





        </tbody>
      </table>

</div>

@endsection
