@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>New Loan</h1>
@stop

@section('content')


<style type="text/css">
    [class*=sidebar-dark-] {
    background-color: #28a745;
  }
  .btn.btn-primary {
    background-color: green;
    border-color: green;
  }
  
</style>

<div class="card card-primary">
  <div class="card-header"style="background-color: green;">
    <h3 class="card-title">Loan Request</h3>
  </div>
  <form action="{{ route('guardarprestamo.store') }}" id="loanForm" method="POST">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="titulofrances">Book</label>
            <select name="libro_id" id="libro_id" class="form-control" required>
              <option value="">Select book</option>
              @foreach($libro as $id => $libros_frances)
              <option value="{{$id}}">{{$libros_frances}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="editorialfrances">Comment</label>
            <select name="comentario" class="form-control">
            <option>Planning</option>
            <option>Consult</option>
            <option>Study</option>
            <option>Reinforcement</option>
            <option>Class</option>
          </select>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label>Initial Date</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-clock"></i></span>
              </div>
              <input type="datetime-local" class="form-control float-right" id="fecha_inicial" name="fecha_inicial" />
            </div>
          </div>

          <div class="form-group">
            <label>Final Date</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-clock"></i></span>
              </div>
              <input type="datetime-local" class="form-control float-right" id="fecha_final" name="fecha_final" required/>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="form-group">
      <input type="hidden" name="confirmed" id="confirmed" value="0">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">Send</button>
      </div>
    </div>
  </form>
</div>

  </form>
</div>
<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to continue?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="confirmSubmit">Continue</button>
      </div>
    </div>
  </div>
</div>
<script>
  
  document.getElementById("fecha_inicial").addEventListener("change", function() {
    const fechaInicial = new Date(this.value);
    const fechaFinalInput = document.getElementById("fecha_final");

    // Obtener el día de la semana de la fecha inicial (0: domingo, 1: lunes, ..., 6: sábado)
    const diaSemana = fechaInicial.getDay();

   
    // Calcular la fecha mínima (lunes siguiente a la fecha inicial)
    const fechaMinima = new Date(fechaInicial);


    if (diaSemana === 5) {
    fechaMinima.setDate(fechaInicial.getDate() + (diaSemana === 5 ? 3 : 1)); // 3 días si es viernes, 1 día en otro caso

    }
    else{
    fechaMinima.setDate(fechaInicial.getDate());
    }

    // Saltar los sábados y domingos
    while (fechaMinima.getDay() === 0 || fechaMinima.getDay() === 6) {
      fechaMinima.setDate(fechaMinima.getDate() + 1);
    }

    // Calcular la fecha máxima (3 días después de la fecha mínima)
    const fechaMaxima = new Date(fechaMinima);
    fechaMaxima.setDate(fechaMinima.getDate() + 2);

    // Saltar los sábados y domingos
    while (fechaMaxima.getDay() === 0 || fechaMaxima.getDay() === 6) {
      fechaMaxima.setDate(fechaMaxima.getDate() + 1);
    }

    // Establecer el valor y el atributo "min" del campo de fecha final
    fechaFinalInput.value = fechaMinima.toISOString().slice(0, 16);
    fechaFinalInput.min = fechaMinima.toISOString().slice(0, 16);

    // Establecer el atributo "max" del campo de fecha final
    fechaFinalInput.max = fechaMaxima.toISOString().slice(0, 16);
  });
  document.getElementById('confirmSubmit').addEventListener('click', function() {
  // Set the value of the hidden input field to indicate confirmation
  document.getElementById('confirmed').value = '1';
  
  // Submit the form
  document.getElementById('loanForm').submit();
});
</script>



 
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