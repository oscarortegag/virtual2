@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>Nuevo Registro</h1>
@stop

@section('content')




<<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Nuevo Registro Material didactico</h3>
</div>


<form action="{{ route('guardardidactico.store') }}" method="POST">
 @csrf   
<div class="card-body">
  <div class="form-group">
     <label for="titulofrances">Nombre</label>
       <input type="text" name="nombre" class="form-control" id="titulofrances" placeholder="ingrese nombre" value="{{old('nombre') }}">
</div>
  
<div class="col-sm-6">
<div class="form-group">
<label>Categoria</label>
<select name="categoria" class="form-control">
<option>Juegos de mesa</option>
<option>Material tecnologico</option>
<option>Otros</option>
</select>
</div>
</div>
<div class="form-group">
       <label for="autorfrances">cantidad</label>
         <input type="text" name="cantidad" class="form-control" id="cantidadfrances" placeholder="Ingrese cantidad de libros" value="{{old('cantidad') }}">
</div>


<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop