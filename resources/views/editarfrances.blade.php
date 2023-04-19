@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>Editar registro</h1>
@stop

@section('content')




<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Editar Registro  <i>{{$libros_frances->titulo }}</i>

</h3>
</div>


<form action="{{ route('librosfrances.update', $libros_frances) }}" method="POST">
     @method('put')
     <x-frances-form-body :libros_frances="$libros_frances"/>
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