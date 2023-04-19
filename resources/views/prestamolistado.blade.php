@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>Prestamos</h1>
@stop




@section('content')




<tbody>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">Listado de prestamos</h3>
<div class="card-tools">
<div class="input-group-append">
<a a href="{{ route('registrarprestamo.create') }}" class="btn btn-app">
<i class="fas fa-edit"></i> Nuevo Prestamo
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
<th>Prestado a</th>
<th>Motivo</th>
<th>Fecha Prestamo</th>
<th>Fecha devolucion</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>

@foreach ($libros as $data)
  <tr>
    <td>
       {{$data->libros->titulo }}
    </td>
    <td>
       {{$data->usuario->name }}
    </td>
    <td>
       {{$data->comentario }}
    </td>
    <td>
       {{$data->fecha_prestamo }}
    </td>
    <td class="fecha-devolucion">{{$data->fecha_devolucion ?? 'Prestado'}}

    </td>
   
<td>
   
    
   @if(!$data->fecha_devolucion)
  <a href="{{route('prestamo.devolver', $data->libros->id)}}" class="libro-devolucion btn-accion-tabla tooltipsC" title="Devolver este libro">
   <i class="fa fa-fw fa-reply-all"></i>
</a>
 @endif

 
</td>
</tr>

@endforeach



</tbody>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
  
@stop