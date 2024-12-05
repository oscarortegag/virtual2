@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h2>Books of the day</h2>
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
  .img-sm {
  width: 200px; /* Ajusta el tamaño según tus preferencias */
  height: auto; /* Mantén la proporción original de la imagen */
}

.card-title {
  font-weight: bold;
  font-size: 1.2em; /* Ajusta el tamaño a tu preferencia */
}
.custom-text {
    font-size: 1.2rem; /* Tamaño de fuente personalizado */
    /* Otros estilos adicionales si lo deseas */
  }

  .btn-large-text {
    font-size: 1.2rem; /* Tamaño de fuente personalizado */
    /* Otros estilos adicionales si lo deseas */
  }


</style>
<div class="content">
  <div class="container-fluid">
    <!-- Sección de libros del día -->
    <div class="row mb-4">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <!-- Columna para la imagen -->
          <div class="col-md-4">
            <img src="storage/app/public/imagenes/caratulas/1689618447.jpg" class="card-img-top img-sm" alt="Portada del Libro 1">
          </div>
          <!-- Columna para la información -->
          <div class="col-md-8">
            <h6 class="card-title">Décibel 1</h6>
            <br><br>
            <p class="card-text">Autor: M. Butzbach, C. Martin, D.Pastor. I Saracibar</p>
            <br>
            <p class="card-text">Language: French</p>
            <br>
            <p class="card-text">ISBN: 9882392323</p>
            <p class="card-text">Synopsis: 6 units of three lessons, a page of games/revisions and an oral assessment, an action anchor point (micro-tasks and two final tasks), regular DELF A1 training, a video sequence to approach French-speaking civilization, the activity book with audio CD and mind maps for each unit...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <!-- Columna para la imagen -->
              <div class="col-md-4">
                <img src="storage/app/public/imagenes/caratulas/Encuisineetensalle.jpg" class="card-img-top img-sm" alt="Portada del Libro 1">
              </div>
              <!-- Columna para la información -->
              <div class="col-md-8">
            <h6 class="card-title">En cuisine et en salle</h6>
            <br><br>
            <p class="card-text">Author: Vera Bencini, Monique Paola Cangioli, Francesca Naldini, Aurélie Paris</p>
            <p class="card-text">Language: French</p>
            <p class="card-text">ISBN: 3333</p>
            <p class="card-text">Synopsis: Designed for students who have acquired the A2 level of the Common European Framework of Reference. This method meets the needs of the objectives of the French courses (FOS) and the expectations of those who want to improve their French in a context or the search for professional employment in the specific catering sector in the French-speaking environment.</p>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <!-- Columna para la imagen -->
          <div class="col-md-4">
            <img src="storage/app/public/imagenes/caratulas/olivertwist.jpg" class="card-img-top img-sm" alt="Portada del Libro 1">
          </div>
          <!-- Columna para la información -->
          <div class="col-md-8">
            <h6 class="card-title">Oliver Twist</h6>
            <br><br>
            <p class="card-text">Autor: M. Butzbach, C. Martin, D.Pastor. I Saracibar</p>

            <p class="card-text">Language: English</p>
            <br>
            <p class="card-text">ISBN: 9788853605139</p>
            <p class="card-text">Synopsis: This fiercely comic tale stands in marked  contrast to its genial predecessor, The Pickwick  Papers. Set against London's seedy back  street slums, Oliver Twist is  the saga of a workhouse orphan captured and thrust  into a thieves' den, where some of Dickens's most  depraved villains preside: the incorrigible  Artful Dodger, the murderous bully Sikes, and the  terrible Fagin, that treacherous ringleader whose  grinning knavery threatens to send them all to the  "ghostly gallows."</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <!-- Columna para la imagen -->
          <div class="col-md-4">
            <img src="storage/app/public/imagenes/caratulas/three.jpg" class="card-img-top img-sm" alt="Portada del Libro 1">
          </div>
          <!-- Columna para la información -->
          <div class="col-md-8">
            <h6 class="card-title">Three adventures of Sherlock Holmes</h6>
            <br><br>
            <p class="card-text">Author: M. Butzbach, C. Martin, D.Pastor. I Saracibar</p>
            <br>
            <p class="card-text">Language: English</p>
            <br>
            <p class="card-text">ISBN: 9781408294468</p>
            <br>
            <p class="card-text">Synopsis: Well-written stories entertain us, make us think, and keep our interest page after page. Pearson English Readers offer teenage and adult learners a huge range of titles, all featuring carefully graded language to make them accessible to learners of all abilities.

Through the imagination of some of the world's greatest authors, the English language comes to life in pages of our Readers.1</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h1 class="display-6">News</h1> <!-- Aumentar el tamaño del título -->
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6"> <!-- Columna para la imagen -->
            <img src="storage/app/public/imagenes/caratulas/banner.png" alt="Imagen de noticias" class="img-fluid">
          </div>
          <div class="col-md-4"> <!-- Columna para el texto -->
          <ul class="fs-5">
              <li class="custom-text">10 new french books added to the library!</li>
              <br>
              <li class="custom-text">Don't miss the new adventure books</li>
              <br>
              <li class="custom-text">Coming soon: launch of the new epic fantasy saga.</li>
              <br>
              <li class="custom-text">Final English exams: August 2 to August 5, 2023</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
   <!-- Contenido "before applying for a loan" -->
   <div class="row mb-4">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
          <h1 class="display-6">Before applying for a loan</h1>
          </div>
          <div class="card-body">
          <ul class="fs-5">
              <li class="custom-text">You should not have debts in the university library!</li>
              <br>
              <li class="custom-text">Have your credential when going to pick up and deliver the book.</li>
              <br>
              <li class="custom-text">Do not damage the material provided to you.</li>
            </ul>
            <!-- Botones -->
            <div class="row">
              <div class="col-md-6">
                <a href="{{ route('registrarprestamo.create') }}" class="btn btn-block btn-primary btn-large-text">New loan</a>
              </div>
              <div class="col-md-6">
                <a href="{{ route('prestamo.index') }}" class="btn btn-block btn-primary btn-large-text">Loan history</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Botones -->
   
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop