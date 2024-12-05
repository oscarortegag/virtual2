@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>Inventory</h1>
@stop



@section('content')

<style type="text/css">
    [class*=sidebar-dark-] {
    background-color: #28a745;
}

    /* Estilos para hacer el texto más grande */
    td, th {
        font-size: 20px;
    }

    /* Estilos para hacer el texto en negritas */
    b {
        font-weight: bold;
    }
</style>

<!-- La tabla con los datos -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Category</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>French books</td>
            <td>
                <a href="{{ route('librosfrances.index') }}" class="btn btn-app">
                    <i class="fas fa-edit"></i> Check
                </a>
                <a href="{{ route('librosfrances.pdf') }}" class="btn btn-app">
                    <span class="badge bg-teal"></span>
                    <i class="fas fa-inbox"></i> Reports
                </a>
                <a href="{{ route('registrarfrances.create') }}" class="btn btn-app">
                    <i class="fas fa-edit"></i> New Registration
                </a>
            </td>
        </tr>
        <tr>
            <td>English books</td>
            <td>
                <a href="{{ route('librosingles.index') }}" class="btn btn-app">
                    <i class="fas fa-edit"></i> Check
                </a>
                <a href="{{ route('librosingles.pdf') }}" class="btn btn-app">
                    <span class="badge bg-teal"></span>
                    <i class="fas fa-inbox"></i> Reports
                </a>
                <a href="{{ route('registraringles.create') }}" class="btn btn-app">
                    <i class="fas fa-edit"></i> New Registration
                </a>
            </td>
        </tr>
        <tr>
            <td>Teaching materials</td>
            <td>
                <a href="{{ route('materialdidactico.index') }}" class="btn btn-app">
                    <i class="fas fa-edit"></i> Check
                </a>
                <a href="{{ route('materialdidactico.pdf') }}" class="btn btn-app">
                    <span class="badge bg-teal"></span>
                    <i class="fas fa-inbox"></i> Reports
                </a>
                <a href="{{ route('registrardidactico.create') }}" class="btn btn-app">
                    <i class="fas fa-edit"></i> New Registration
                </a>
            </td>
        </tr>
    </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop