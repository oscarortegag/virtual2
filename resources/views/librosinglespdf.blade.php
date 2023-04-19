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
 
<h3>Lista de libros ingles<h3>


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

@foreach ($material_ingles as $material_ingles)
  <tr>
    <td>
       {{$material_ingles->titulo }}
    </td>
 <td>
       {{$material_ingles->nivel }}
    </td>
    <td>
       {{$material_ingles->editorial }}
    </td>
    <td>
       {{$material_ingles->autor }}
    </td>
    <td>
       {{$material_ingles->isbn }}
    </td>
    <td>
       {{$material_ingles->categoria }}
    </td>
    <td>
       {{ $material_ingles->idioma }}
    </td>
    <td>
       {{ $material_ingles->cantidad }}
    </td>
    

@endforeach





</body>
</html>    
