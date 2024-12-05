@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>New Register</h1>
@stop

@section('content')


<style type="text/css">
    [class*=sidebar-dark-] {
    background-color: #28a745;
}
</style>

<div class="card card-primary">
<div class="card-header"style="background-color: green;">
<h3 class="card-title">Nuevo Register English book</h3>
</div>


<form action="{{ route('guardaringles.store') }}" method="POST" id="form-general" enctype="multipart/form-data">
  @csrf
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="titulofrances">Title</label>
          <input type="text" name="titulo" class="form-control" id="titulofrances" placeholder="Enter title" value="{{ old('titulo') }}">
        </div>
        <div class="form-group">
          <label for="autorfrances">Author</label>
          <input type="text" name="autor" class="form-control" id="autorfrances" placeholder="Enter author" value="{{ old('autor') }}">
        </div>
        <div class="form-group">
          <label for="editorialfrances">Editorial</label>
          <input type="text" name="editorial" class="form-control" id="editorialfrances" placeholder="Enter editorial" value="{{ old('editorial') }}">
        </div>
        <div class="form-group">
          <label for="isbnfrances">ISBN</label>
          <input type="text" name="isbn" class="form-control" id="isbnfrances" placeholder="Enter isbn" value="{{ old('isbn') }}">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Level</label>
          <select name="nivel" class="form-control">
            <option>A1</option>
            <option>A2.1</option>
            <option>A1-A2</option>
            <option>B1</option>
            <option>A2-B1</option>
            <option>B2</option>
            <option>B1-B2</option>
          </select>
        </div>
        <div class="form-group">
          <label>Category</label>
          <select name="categoria" class="form-control">
            <option>Course book-Livre de l'élève</option>
            <option>Professional-Professionnel</option>
            <option>Workbook- Cahier</option>
          </select>
        </div>
        <div class="form-group">
          <label for="autorfrances">Amount</label>
          <input type="text" name="cantidad" class="form-control" id="cantidadfrances" placeholder="Enter amount" value="{{ old('cantidad') }}">
        </div>
        <div class="form-group">
          <label>Language</label>
          <select name="idioma" class="form-control">
            <option>English</option>
          </select>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="foto">Image</label>
      <input type="file" name="foto" id="foto" data-initial-preview="{{isset($data->imagen) ? Storage::url("imagenes/caratulas/$data->imagen") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Caratula+Libro"}}" accept="image/*" class="btn btn-success" />
    </div>
  </div>

  <div class="card-footer">
    <button type="submit" class="btn btn-success">Send</button>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" crossorigin="anonymous">

<!-- default icons used in the plugin are from Bootstrap 5.x icon library (which can be enabled by loading CSS below) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">

<!-- alternatively you can use the font awesome icon library if using with `fas` theme (or Bootstrap 4.x) by uncommenting below. -->
<!-- link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous" -->

<!-- the fileinput plugin styling CSS file -->
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="{{asset("assets/js/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet" type="text/css"/>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

<!-- buffer.min.js and filetype.min.js are necessary in the order listed for advanced mime type parsing and more correct
     preview. This is a feature available since v5.5.0 and is needed if you want to ensure file mime type is parsed 
     correctly even if the local file's extension is named incorrectly. This will ensure more correct preview of the
     selected file (note: this will involve a small processing overhead in scanning of file contents locally). If you 
     do not load these scripts then the mime type parsing will largely be derived using the extension in the filename
     and some basic file content parsing signatures. -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/buffer.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/filetype.min.js" type="text/javascript"></script>

<!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
    wish to resize images before upload. This must be loaded before fileinput.min.js -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/piexif.min.js" type="text/javascript"></script>

<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
    This must be loaded before fileinput.min.js -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/sortable.min.js" type="text/javascript"></script>

<!-- bootstrap.bundle.min.js below is needed if you wish to zoom and preview file content in a detail modal
    dialog. bootstrap 5.x or 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<!-- the main fileinput plugin script JS file -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/fileinput.min.js"></script>

<!-- following theme script is needed to use the Font Awesome 5.x theme (`fas`). Uncomment if needed. -->
<!-- script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/themes/fas/theme.min.js"></script -->

<!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/locales/LANG.js"></script>

    <script src="{{asset("assets/js/bootstrap-fileinput/js/fileinput.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/js/locales/es.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/themes/fa5/theme.min.js")}}" type="text/javascript"></script>


<script src="{{asset("assets/pages/scripts/libro/crear.js")}}" type="text/javascript"></script>
@stop