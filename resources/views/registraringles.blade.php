@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>Nuevo Registro</h1>
@stop

@section('content')




<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Nuevo Registro Ingles</h3>
</div>


<form action="{{ route('guardaringles.store') }}" method="POST">
 @csrf   
<div class="card-body">
  <div class="form-group">
     <label for="titulofrances">Titulo</label>
       <input type="text" name="titulo" class="form-control" id="titulofrances" placeholder="ingrese titulo" value="{{old('titulo') }}">
</div>
   <div class="form-group">
       <label for="autorfrances">Autor</label>
         <input type="text" name="autor" class="form-control" id="autorfrances" placeholder="Ingrese autor" value="{{old('autor') }}">
</div>
    <div class="col-sm-6">

    <div class="form-group">
<label>Nivel</label>
<select name="nivel" class="form-control" >
<option>A1</option>
<option>A2.1</option>
<option>A1-A2</option>
<option>B1</option>
<option>A2-B1</option>
<option>B2</option>
<option>B1-B2</option>
</select>
</div>
</div>
<div class="form-group">
<label for="editorialfrances">Editorial</label>
<input type="text" name="editorial" class="form-control" id="editorialfrances" placeholder="Ingrese editorial" value="{{old('editorial') }}">
</div>
<div class="form-group">
<label for="isbnfrances">ISBN</label>
<input type="text" name="isbn" class="form-control" id="isbnfrances" placeholder="Ingrese isbn" value="{{old('isbn') }}">
</div>
<div class="col-sm-6">

<div class="form-group">
<label>Categoria</label>
<select name="categoria" class="form-control">
<option>Course book-Livre de l'élève</option>
<option>Professional-Professionnel</option>
<option>Workbook- Cahier</option>
</select>
</div>
</div>
<div class="form-group">
       <label for="autorfrances">cantidad</label>
         <input type="text" name="cantidad" class="form-control" id="cantidadfrances" placeholder="Ingrese cantidad de libros" value="{{old('cantidad') }}">
</div>
<div class="col-sm-6">

<div class="form-group">
<label>Idioma</label>
<select name="idioma" class="form-control" >
<option>Ingles</option>


</select>
</div>
</div>



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