@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>Loans</h1>
@stop




@section('content')


<style type="text/css">
    [class*=sidebar-dark-] {
    background-color: #28a745;
}
.color-green {
        color: green;
    }
    
    .color-yellow {
      color: #F5BF26;
    }
    
    .color-red {
        color: red;
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
</style>

<tbody>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">Loans list</h3>
<div class="card-tools">
<div class="input-group-append">
<a a href="{{ route('registrarprestamo.create') }}" class="btn btn-app">
<i class="fas fa-edit"></i> New Loan
</a>   
</div> 

</div>
</div>
<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
<tr>
<th>Title</th>
<th>lent to</th>
<th>ID</th>
<th>Reason</th>
<th>Initial Date</th>
<th>Final Date</th>
<th>Status date</th>
<th>Actions</th>
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
    {{$data->usuario->matricula }}
    </td>
    <td>
       {{$data->comentario }}
    </td>
    <td>
       {{$data->fecha_inicial }}
    </td>
    <td>
       {{$data->fecha_final }}
    </td>
    <td class="
    @if($data->fecha_devolucion === null)
        color-green
    @elseif($data->fecha_devolucion <= $data->fecha_final)
        color-green
        @elseif($data->fecha_devolucion <= date('Y-m-d', strtotime('+1 day', strtotime($data->fecha_final))) && $data->fecha_devolucion > $data->fecha_final)
        color-yellow
    @else
        color-red
    @endif
">
    {{$data->fecha_devolucion ?? 'Prestado'}}
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