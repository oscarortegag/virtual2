@extends('adminlte::page')

@section('title', 'Mi Perfil')

@section('content_header')
    <h1> Profile</h1>
@stop


@section('content')

<style type="text/css">
    [class*=sidebar-dark-] {
    background-color: #28a745;
}
</style>


    <div class="card">
        <div class="card-body">
            <h4>User information:</h4>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name:</label>
                        <input type="text" id="name" class="form-control" value="{{ $user->name }}" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" id="email" class="form-control" value="{{ $user->email }}" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="matricula">Tuition/ID:</label>
                        <input type="text" id="matricula" class="form-control" value="{{ $user->matricula }}" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telefono">Telephone:</label>
                        <input type="text" id="telefono" class="form-control" value="{{ $user->telefono }}" readonly>
                    </div>
                </div>
                <!-- Agregar más campos de entrada según la estructura de tu tabla de usuarios -->
            </form>
        </div>
    </div>
@stop