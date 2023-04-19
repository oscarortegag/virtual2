<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrancesController;
use App\Http\Controllers\InglesController;
use App\Http\Controllers\DidacticoController;
use App\Http\Controllers\PrestamoController;

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

Route::get('admin/inventario', function () {
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
Route::get('{libros_frances}/librosfrances',[FrancesController::class, 'destroy']
)->name('librosfrances.destroy');
Route::get('/librosfrancespdf', [FrancesController::class, 'pdf']
)->middleware(['auth', 'verified'])->name('librosfrances.pdf');



Route::get('/registraringles', [Inglescontroller::class, 'create']
)->middleware(['auth', 'verified'])->name('registraringles.create');
Route::post ('guardaringles', [InglesController::class, 'store'])->name('guardaringles.store');
Route::get('/librosingles',[InglesController::class, 'index']   
)->middleware(['auth', 'verified'])->name('librosingles.index');
Route::get('{material_ingles}/editaringles',[InglesController::class, 'edit']   
)->middleware(['auth', 'verified'])->name('librosingles.edit');
Route::put('{material_ingles}/actualizaringles',[InglesController::class, 'update']   
)->middleware(['auth', 'verified'])->name('librosingles.update');
Route::get('{material_ingles}/librosingles',[InglesController::class, 'destroy']
)->name('librosingles.destroy');
Route::get('/librosinglespdf', [InglesController::class, 'pdf']
)->middleware(['auth', 'verified'])->name('librosingles.pdf');


Route::get('/registrardidactico', [DidacticoController::class, 'create']
)->middleware(['auth', 'verified'])->name('registrardidactico.create');
Route::post ('guardardidactico', [DidacticoController::class, 'store'])->name('guardardidactico.store');
Route::get('/materialdidactico',[DidacticoController::class, 'index']   
)->middleware(['auth', 'verified'])->name('materialdidactico.index');
Route::get('{didacticos}/editardidactico',[DidacticoController::class, 'edit']   
)->middleware(['auth', 'verified'])->name('materialdidactico.edit');
Route::put('{didacticos}/actualizardidactico',[DidacticoController::class, 'update']   
)->middleware(['auth', 'verified'])->name('materialdidactico.update');
Route::get('{didacticos}/materialdidactico',[DidacticoController::class, 'destroy']
)->name('materialdidactico.destroy');
Route::get('/materialdidacticopdf', [DidacticoController::class, 'pdf']
)->middleware(['auth', 'verified'])->name('materialdidactico.pdf');


Route::get('/registrarprestamo', [PrestamoController::class, 'create']
)->middleware(['auth', 'verified'])->name('registrarprestamo.create');
Route::post ('guardarprestamo', [PrestamoController::class, 'store'])->name('guardarprestamo.store');
Route::get('/prestamolistado', [PrestamoController::class, 'index']
)->middleware(['auth', 'verified'])->name('prestamo.index');
Route::get('{libros}/prestamolistado',[PrestamoController::class, 'devolver']   
)->middleware(['auth', 'verified'])->name('prestamo.devolver');
Route::get('admin/prestamos', function () {
    return view('prestamos');

});

Route::get('admin/reportes', function () {
    return view('reportes');
});



Route::get('/reportes', function () {
    return view('reportes');
})->middleware(['auth', 'verified'])->name('reportes');
