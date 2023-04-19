@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>Inventario</h1>
@stop



@section('content')
<table class="table table-bordered">
<thead>
<tr>

<th>Categoria</th>
<th>opciones</th>

</tr>
</thead>
<tbody>
<tr>

<td>libros de frances</td>
<td>
<a href="{{ route('librosfrances.index') }}"  class="btn btn-app">
<i class="fas fa-edit"></i> Ver
</a>
<a href="{{ route('librosfrances.pdf') }}" class="btn btn-app">
<span class="badge bg-teal"></span>
<i class="fas fa-inbox"></i> Reportes
</a>
<a href="{{ route('registrarfrances.create') }}" class="btn btn-app">
<i class="fas fa-edit"></i> nuevo registro
</a>
</td>


</tr>
<tr>

<td>Material de ingles</td>
<td>
<a a href="{{ route('librosingles.index') }}" class="btn btn-app">
<i class="fas fa-edit"></i> Ver
</a>
<a a href="{{ route('librosingles.pdf') }}" class="btn btn-app">
<span class="badge bg-teal"></span>
<i class="fas fa-inbox"></i> Reportes
</a>
<a a href="{{ route('registraringles.create') }}" class="btn btn-app">
<i class="fas fa-edit"></i> Nuevo registro
</a>
</td>

</tr>
<tr>

<td>Material didactico</td>
<td>
<a href="{{ route('materialdidactico.index') }}" class="btn btn-app">
<i class="fas fa-edit"></i> Ver
</a>
<a a href="{{ route('materialdidactico.pdf') }}" class="btn btn-app">
<span class="badge bg-teal"></span>
<i class="fas fa-inbox"></i> Reportes
</a>
<a href="{{ route('registrardidactico.create') }}" class="btn btn-app">
<i class="fas fa-edit"></i> Nuevo Registro
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