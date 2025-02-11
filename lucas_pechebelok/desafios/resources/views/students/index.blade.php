@extends('app')
<<<<<<< HEAD

@section('title', 'Student List')

@section('content')
    <h1>Student List</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">CPF</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>
                        <a href="{{ route('students.show', $student) }}">
                            {{ $student->name }}
                        </a>
                    </td>
                    <td>{{ $student->cpf }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('students.edit', $student) }}">
                            Update
                        </a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Are you sure you want to delete?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class='btn btn-success' href="{{ route('students.create') }}">New Student</a>
@endsection
=======
@section('title', 'Lista de estudantes')
@section('content')
<h1>Lista Estudantes</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Data de nascimento</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <th space="row"> {{ $student->id }} </th>
            <td>
                <a href="{{ route('students.show', $student)}}">
                    {{ $student->nome }}
                </a>
            </td>
            <td> {{ $student->cpf }} </td>
            <td id="btnAcao">
                <a class="btn btn-primary" href="{{route('students.edit', $student)}}">Editar</a>
                <form action="{{route('students.destroy', $student)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Isso irá remover o estudante. Confirma?')">
                        Deletar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-success" href="{{ route('students.create') }}">Novo Estudante</a>
@endsection
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
