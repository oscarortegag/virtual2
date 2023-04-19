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
 
<h3>Lista de libros frances<h3>

<table class="table table-hover text-nowrap">
<head>
<tr>
<th>Titulo</th>
<th>nivel</th>
<th>Editorial</th>
<th>Autor</th>
<th>isbn</th>
<th>categoria</th>
<th>Idioma</th>
<th>Cantidad</th>

</tr>
</head>
<body>

@foreach ($libros_frances as $libros_frances)
  <tr>
    <td>
       {{$libros_frances->titulo }}
    </td>
 <td>
       {{$libros_frances->nivel }}
    </td>
    <td>
       {{$libros_frances->editorial }}
    </td>
    <td>
       {{$libros_frances->autor }}
    </td>
    <td>
       {{$libros_frances->isbn }}
    </td>
    <td>
       {{$libros_frances->categoria }}
    </td>
    <td>
       {{ $libros_frances->idioma }}
    </td>
    <td>
       {{ $libros_frances->cantidad }}
    </td>
    
</tr>

@endforeach



</body>

</body>
</html>    
