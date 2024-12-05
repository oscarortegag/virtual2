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

    /* Estilos para hacer el texto "French books" más grande y en negritas */
    .card-title {
        font-size: 24px;
        font-weight: bold;
    }

    /* Estilos para los títulos de las columnas de la tabla */
    th {
        background-color: #28a745;
        color: #fff;
    }

    /* Estilos para los bordes de la tabla y las celdas */
    .table {
        border-collapse: collapse;
        width: 100%;
    }

    .table th, .table td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">French books</h3>
                <div class="card-tools">
<div class="input-group-append">
<form action="{{route('librosfrances.excel')}}" method="POST" enctype="multipart/form-data">
    @csrf
<input type="file" name="import_file" />
<button class="btn btn-app" type="submit">Import</button>
</form>  
<a a href="{{ route('registrarfrances.create') }}" class="btn btn-app">
<i class="fas fa-edit"></i> New registration
</a>   
</div> 
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Level</th>
                            <th>Editorial</th>
                            <th>Author</th>
                            <th>isbn</th>
                            <th>category</th>
                            <th>Language</th>
                            <th>Amount</th>
                            <th>Actions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($libros_frances as $libro)
                        <tr>
                            <td>
                                <a href="{{route('ver_frances', $libro)}}" class="ver-libro">{{$libro->titulo}}</a>
                            </td>
                            <td>{{$libro->nivel }}</td>
                            <td>{{$libro->editorial }}</td>
                            <td>{{$libro->autor }}</td>
                            <td>{{$libro->isbn }}</td>
                            <td>{{$libro->categoria }}</td>
                            <td>{{ $libro->idioma }}</td>
                            <td>{{ $libro->cantidad }}</td>
                            <td>
                                <a href="{{ route('librosfrances.edit', $libro) }}" class="btn btn-default">Edit</a>
                            </td>
                            <td>
                            <a href="{{ route('librosfrances.destroy', $libro) }}" class="btn btn-default deleteLink">Delete</a>
                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-ver-libro" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="deleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this register?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
        // Añadir el evento clic al enlace "Delete"
        const deleteLinks = document.querySelectorAll('.deleteLink');
        deleteLinks.forEach(deleteLink => {
            deleteLink.addEventListener('click', function(event) {
                event.preventDefault();
                const deleteUrl = this.getAttribute('href');
                $('#deleteModal').modal('show');
                document.getElementById('confirmDeleteButton').addEventListener('click', function() {
                    $('#deleteModal').modal('hide');
                    window.location.href = deleteUrl;
                });
            });
        });
    </script>
    <script> console.log('Hi!'); </script>
    <script src="{{asset("assets/pages/scripts/libro/index.js")}}" type="text/javascript"></script>
@stop