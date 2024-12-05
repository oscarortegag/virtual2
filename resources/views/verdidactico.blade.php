<div>{{$didacticos->nombre}}</div>
<div>{{$didacticos->isbn}}</div>
<div>{{$didacticos->autor}}</div>
<div><img src="{{Storage::url("app/public/imagenes/caratulas/$didacticos->foto")}}" alt="Caratula del libro" width="100%"></div>