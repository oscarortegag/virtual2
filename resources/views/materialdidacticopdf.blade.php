<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content"IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
      <title> Libros Frances</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
 
<h3>Lista de material didactico Biblioteca ingles<h3>

<table class="table table-hover text-nowrap">
<head>
<tr>
<th>Nombre</th>
<th>Categoria</th>
<th>Cantidad</th>

</tr>
</head>
<body>

@foreach ($didacticos as $didacticos)
  <tr>
    <td>
       {{$didacticos->nombre }}
    </td>
    <td>
       {{$didacticos->categoria }}
    </td>
 
    <td>
       {{ $didacticos->cantidad }}
    </td>
    <td>
    
</tr>

@endforeach



</body>

</body>
</html>    
