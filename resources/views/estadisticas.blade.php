@extends('adminlte::page')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-labels@1.2.0"></script>

@section('title', 'Libro más prestado')

@section('content_header')
    <h1>Most borrowed book</h1>
@stop

@section('content')

<style type="text/css">
    [class*=sidebar-dark-] {
    background-color: #28a745;
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

</style>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8"> <!-- Columna para el texto -->
                @if(isset($libros2))
                    <h4>Information of the most borrowed book:</h4>
                    <p class="custom-text"><strong>Títle:</strong> {{ $libros2->titulo }}</p>
                    <p class="custom-text"><strong>Author:</strong> {{ $libros2->autor }}</p>
                    <p class="custom-text"><strong>ISBN:</strong> {{ $libros2->isbn }}</p>
                    <p class="custom-text"><strong>Language:</strong> {{ $libros2->idioma }}</p>
                    <!-- Agregar más detalles del libro según la estructura de tu tabla -->
                @else
                    <p>No hay datos disponibles.</p>
                @endif
            </div>
            <div class="col-md-4"> <!-- Columna para la imagen -->
            <img src="storage/app/public/imagenes/caratulas/decibel3.jpg" class="card-img-top img-sm" alt="Portada del Libro 1">
            </div>
        </div>
    </div>
</div>

    <div class="card mt-4">
        <div class="card-body">
            @if(isset($libroMasPrestado))
            <h1 class="display-6">Stadistics</h1>
            <p class="custom-text">Most borrowed book: {{ $libroMasPrestado->total_prestamos }} times.</p>
                <div style="max-width: 1000px; margin: auto;">
                    <canvas id="myChart"></canvas>
                </div>
            @else
                <p>No hay datos disponibles.</p>
            @endif
        </div>
    </div>

    @if(isset($librosPrestados))
        <div class="card mt-4">
            <div class="card-body">
            <h1 class="display-6">Borrowed Books:</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="fs-7" >Títle</th>
                            <th class="fs-7">Times borrowed</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($libros as $libro)
                            <tr>
                                <td >{{ $libro->titulo }}</td>
                                <td>{{ $librosPrestados->where('libros_frances_id', $libro->id)->first()->total_prestamos }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

    @if(isset($datosEjemplo))
        <div class="card mt-4">
            <div class="card-body">
            <h1 class="display-6">Material most borrowed:</h1>
                <div style="max-width: 400px; margin: auto;">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>
    @endif

    <script>
        // Obtener los datos para la gráfica desde el controlador (por ejemplo, desde $librosPrestados)
        var librosPrestados = {!! json_encode($librosPrestados) !!};

        // Extraer los nombres y veces prestadas de cada libro para la gráfica
        var nombresLibros = {!! json_encode($libros->pluck('titulo')) !!};
        var vecesPrestadas = {!! json_encode($librosPrestados->pluck('total_prestamos')) !!};

        // Obtener los datos para la gráfica de pastel desde el controlador (por ejemplo, desde $datosEjemplo)
        var datosEjemplo = {!! json_encode($datosEjemplo) !!};

        // Configurar los datos y opciones para la gráfica
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: nombresLibros,
                datasets: [{
                    label: 'times borrowed',
                    data: vecesPrestadas,
                    backgroundColor: 'rgba(248, 192, 192)',
                    borderColor: 'rgba(180, 170, 197)',
                    borderWidth: 5
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
         // Configurar los datos y opciones para la gráfica de pastel
    var ctxPie = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: Object.keys(datosEjemplo),
            datasets: [{
                data: Object.values(datosEjemplo),
                backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                labels: {
                    render: 'percentage',
                    fontColor: ['#ffffff', '#ffffff', '#ffffff'], // Color de la fuente para los porcentajes
                    precision: 2 // Cantidad de decimales para los porcentajes
                }
            },
            legend: {
                display: true,
                position: 'bottom'
            }
        }
    });
    </script>
@stop