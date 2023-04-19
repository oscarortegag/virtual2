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
<h3 class="card-title">Libros de Ingles</h3>
<div class="card-tools">
<div class="input-group-append">
<a a href="{{ route('registraringles.create') }}" class="btn btn-app">
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
<th>Titulo</th>
<th>nivel</th>
<th>Editorial</th>
<th>Autor</th>
<th>isbn</th>
<th>categoria</th>
<th>]Idioma</th>
<th>Cantidad</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>

@foreach ($material_ingles as $material_ingles)
  <tr>
    <td>
       {{$material_ingles->titulo }}
    </td>
 <td>
       {{$material_ingles->nivel }}
    </td>
    <td>
       {{$material_ingles->editorial }}
    </td>
    <td>
       {{$material_ingles->autor }}
    </td>
    <td>
       {{$material_ingles->isbn }}
    </td>
    <td>
       {{$material_ingles->categoria }}
    </td>
    <td>
       {{ $material_ingles->idioma }}
    </td>
    <td>
       {{ $material_ingles->cantidad }}
    </td>
    <td>
    <a href="{{ route('librosingles.edit', $material_ingles) }}" button type="button" class="btn btn-default">Editar</button>
</td>
<td>
    
    <form action="{{ route('librosingles.destroy', $material_ingles) }}" method="post" >
        @csrf
        @method('delete')
    <a href="{{ route('librosingles.destroy', $material_ingles) }}" button type="button" class="btn btn-default">Eliminar</button>
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