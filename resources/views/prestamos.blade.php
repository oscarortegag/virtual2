@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>Préstamos</h1>
@stop

@section('content')


<style type="text/css">
    [class*=sidebar-dark-] {
    background-color: #28a745;
}
</style>

<section class="content">

<div class="card">
<div class="card-header">
<h3 class="card-title">Detalles de préstamos</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
<div class="row">
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Prestamos hoy</span>
<span class="info-box-number text-center text-muted mb-0">4</span>
</div>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Total prestamos mes</span>
<span class="info-box-number text-center text-muted mb-0">21</span>
</div>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Material mas solicitado</span>
<span class="info-box-number text-center text-muted mb-0">ingles 4</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<h4>
    Préstamos recientes
</h4>
<div class="post">
<div class="user-block">


<a href="#">Jonathan Burke Jr.</a>
<span class="description">prestamos realizado - 7:45 PM today</span>
</div>

<p>
Ingles 6 workbook 6pm - 10pm
</p>
<p>

</p>
</div>
<div class="post clearfix">
<div class="user-block">

<a href="#">Sarah Ross</a>
<span class="description">prestamos realizado - 3 days ago</span>
</div>

<p>
course 1 ingles- 9 am - 11 am 
</p>
<p>

</p>
</div>
<div class="post">
<div class="user-block">


 <a href="#">Jonathan Burke Jr.</a>

<span class="description">Prestamos realizado - 5 days ago</span>
</div>

<p>
Frances 3 5pm - 7pm 
</p>
<p>

</p>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
<h3 class="text-primary">Antes de realizar un préstamo</h3>
<h4>Debes tener en cuenta que:</h4>
<div class="text-muted">
<h5>-Debes contar con tu credencial de la universidad </h5> 
<h5>-No Tener adeudo con la Biblioteca </h5> 
<h5>-No tener un adeudo de préstamo </h5>
</div>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>

<div class="text-center mt-5 mb-3">
<a href="{{ route('registrarprestamo.create') }}" button type="button" class="btn btn-block btn-primary">Nuevo préstamo</a>

</div>
<a href="{{ route('prestamo.index') }}" button type="button" class="btn btn-block btn-warning">Historial de préstamos</a>
</div>
</div>
</div>

</div>

</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop