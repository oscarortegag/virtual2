<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrancesController;
use App\Http\Controllers\InglesController;
use App\Http\Controllers\DidacticoController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\ImportarfrancesController;
use App\Http\Controllers\EstadisticasController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/inventario', function () {
    return view('inventario');
});



Route::get('/registrarfrances', [FrancesController::class, 'create']
)->middleware(['auth', 'verified'])->name('registrarfrances.create');
Route::post ('guardarfrances', [FrancesController::class, 'store'])->name('guardarfrances.store');
Route::get('/librosfrances',[FrancesController::class, 'index']   
)->middleware(['auth', 'verified'])->name('librosfrances.index');
Route::get('{libros_frances}/editarfrances',[FrancesController::class, 'edit']   
)->middleware(['auth', 'verified'])->name('librosfrances.edit');
Route::put('{libros_frances}/actualizarfrances',[FrancesController::class, 'update']   
)->middleware(['auth', 'verified'])->name('librosfrances.update');
Route::post('{libros_frances}/verfrances',[FrancesController::class, 'ver']
)->name('ver_frances');
Route::get('{libros_frances}/librosfrances',[FrancesController::class, 'destroy']
)->name('librosfrances.destroy');
Route::get('/librosfrancespdf', [FrancesController::class, 'pdf']
)->middleware(['auth', 'verified'])->name('librosfrances.pdf');
Route::post('/librosfrancesexcel', [ImportarfrancesController::class, 'store']
)->middleware(['auth', 'verified'])->name('librosfrances.excel');




Route::get('/registraringles', [Inglescontroller::class, 'create']
)->middleware(['auth', 'verified'])->name('registraringles.create');
Route::post ('guardaringles', [InglesController::class, 'store'])->name('guardaringles.store');
Route::get('/librosingles',[InglesController::class, 'index']   
)->middleware(['auth', 'verified'])->name('librosingles.index');
Route::get('{material_ingles}/editaringles',[InglesController::class, 'edit']   
)->middleware(['auth', 'verified'])->name('librosingles.edit');
Route::put('{material_ingles}/actualizaringles',[InglesController::class, 'update']   
)->middleware(['auth', 'verified'])->name('librosingles.update');
Route::post('{material_ingles}/veringles',[InglesController::class, 'ver']
)->name('ver_libro');
Route::get('/librosinglespdf', [InglesController::class, 'pdf']
)->middleware(['auth', 'verified'])->name('librosingles.pdf');
Route::get('{material_ingles}/librosingles',[InglesController::class, 'destroy']
)->name('librosingles.destroy');
Route::post('/librosinglesexcel', [InglesController::class, 'importar']
)->middleware(['auth', 'verified'])->name('librosingles.excel');


Route::get('/registrardidactico', [DidacticoController::class, 'create']
)->middleware(['auth', 'verified'])->name('registrardidactico.create');
Route::post ('guardardidactico', [DidacticoController::class, 'store'])->name('guardardidactico.store');
Route::get('/materialdidactico',[DidacticoController::class, 'index']   
)->middleware(['auth', 'verified'])->name('materialdidactico.index');
Route::get('{didacticos}/editardidactico',[DidacticoController::class, 'edit']   
)->middleware(['auth', 'verified'])->name('materialdidactico.edit');
Route::put('{didacticos}/actualizardidactico',[DidacticoController::class, 'update']   
)->middleware(['auth', 'verified'])->name('materialdidactico.update');
Route::post('{didacticos}/verdidactico',[DidacticoController::class, 'ver']
)->name('ver_didactico');
Route::get('{didacticos}/materialdidactico',[DidacticoController::class, 'destroy']
)->name('materialdidactico.destroy');
Route::get('/materialdidacticopdf', [DidacticoController::class, 'pdf']
)->middleware(['auth', 'verified'])->name('materialdidactico.pdf');
Route::post('/materialdidacticoexcel', [DidacticoController::class, 'importar']
)->middleware(['auth', 'verified'])->name('materialdidactico.excel');


Route::get('/registrarprestamo', [PrestamoController::class, 'create']
)->middleware(['auth', 'verified'])->name('registrarprestamo.create');
Route::post ('guardarprestamo', [PrestamoController::class, 'store'])->name('guardarprestamo.store');
Route::get('/prestamolistado', [PrestamoController::class, 'index']
)->middleware(['auth', 'verified'])->name('prestamo.index');
Route::get('{libros}/prestamolistado',[PrestamoController::class, 'devolver']   
)->middleware(['auth', 'verified'])->name('prestamo.devolver');





Route::get('/reportes', function () {
    return view('reportes');
})->middleware(['auth', 'verified'])->name('reportes');



Route::get('/estadisticas', [EstadisticasController::class, 'index']
)->middleware(['auth', 'verified'])->name('estadisticas.index');


Route::get('/usuario', [UserController::class, 'showProfile']
)->middleware(['auth', 'verified'])->name('usuario.index');
