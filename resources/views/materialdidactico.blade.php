@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>Contenido</h1>
@stop

@section('content')




<tbody>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">Material didactico</h3>
<div class="card-tools">
<div class="input-group-append">
<a a href="{{ route('registrardidactico.create') }}" class="btn btn-app">
<i class="fas fa-edit"></i> Nuevo registro
</a>   
</div> 
<div class="input-group input-group-sm" style="width: 150px;">
<input type="text" name="table_search" class="form-control float-right" placeholder="Search">
<div class="input-group-append">
<button type="submit" class="btn btn-default">
<i class="fas fa-search"></i>
</button>
</div>
</div>
</div>
</div>
<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
<tr>
<th>Nombre</th>
<th>Categoria</th>
<th>Cantidad</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>

@foreach ($didacticos as $didacticos)
  <tr>
    <td>
       {{$didacticos->nombre }}
    </td>
    <td>
       {{$didacticos->categoria }}
    </td>
 
    <td>
       {{ $didacticos->cantidad }}
    </td>
    <td>
    <a href="{{ route('materialdidactico.edit', $didacticos) }}" button type="button" class="btn btn-default">Editar</button>
</td>
<td>
   
    <form action="{{ route('materialdidactico.destroy', $didacticos) }}" method="post" >
        @csrf
        @method('delete')
    <a href="{{ route('materialdidactico.destroy', $didacticos) }}" button type="button" class="btn btn-default">Eliminar</button>
</form>  

</td>
</tr>

@endforeach



</tbody>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop