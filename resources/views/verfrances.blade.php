<div>{{$libros_frances->titulo}}</div>
<div>{{$libros_frances->isbn}}</div>
<div>{{$libros_frances->autor}}</div>
<div><img src="{{Storage::url("app/public/imagenes/caratulas/$libros_frances->foto")}}" alt="Caratula del libro" width="100%"></div>