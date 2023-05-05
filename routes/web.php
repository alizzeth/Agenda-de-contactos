<?php
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\NotasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Grupo de Rutas para contacto: Operaciones CRUD (Read:lectura)
/*****************************************************************************************/

//(Read:lectura)
Route::get('/contacto', [ContactoController::class,'index'])
    ->name('contacto.index');

///Ruta para mostrar un solo contacto: READ o lectura de estudiantes
Route::get('/contacto/{id}', [ContactoController::class,'show'])
    ->name('contacto.show')->where('id', '[0-9]+');

//Ruta de CREAR contacto
Route::get('/contacto/crear', [ContactoController::class,'create'])
    ->name('contacto.create');

//segunda ruta de crear contacto con metodo post (ruta que recibe el formulario)
Route::post('/contacto/crear', [ContactoController::class,'store'])
    ->name('contacto.store');

//Ruta mostrar formulario editar contacto/actualizar
Route::get('/contacto/{id}/editar', [ContactoController::class, 'edit'])
    ->name('contacto.edit')->where('id', '[0-9]+');

Route::put('/contacto/{id}/editar', [ContactoController::class,'update'])
    ->name('contacto.update')->where('id', '[0-9]+');

//Ruta para ELIMINAR
Route::delete('/contacto/{id}/borrar', [ContactoController::class,'destroy'])
    ->name('contacto.destroy')->where('id', '[0-9]+');


/*****************************************************************************************/
//rutas Evento
Route::get('/evento', [EventoController::class,'index'])
    ->name('evento.index');

///Ruta para mostrar un solo contacto: READ o lectura de estudiantes
Route::get('/evento/{id}', [EventoController::class,'show'])
    ->name('evento.show')->where('id', '[0-9]+');

//Ruta de CREAR contacto
Route::get('/evento/crear', [EventoController::class,'create'])
    ->name('evento.create');

//segunda ruta de crear contacto con metodo post (ruta que recibe el formulario)
Route::post('/evento/crear', [EventoController::class,'store'])
    ->name('evento.store');

//Ruta mostrar formulario editar contacto/actualizar
Route::get('/evento/{id}/editar', [EventoController::class, 'edit'])
    ->name('evento.edit')->where('id', '[0-9]+');

Route::put('/evento/{id}/editar', [EventoController::class,'update'])
    ->name('evento.update')->where('id', '[0-9]+');

//Ruta para ELIMINAR
Route::delete('/evento/{id}/borrar', [EventoController::class,'destroy'])
    ->name('evento.destroy')->where('id', '[0-9]+');

    /*********************************************************************************************************/
Route::get('/nota', [NotasController::class,'index'])
->name('nota.index');

///Ruta para mostrar un solo contacto: READ o lectura de estudiantes
Route::get('/nota/{id}', [NotasController::class,'show'])
    ->name('nota.show')->where('id', '[0-9]+');

//Ruta de CREAR contacto
Route::get('/nota/crear', [NotasController::class,'create'])
    ->name('nota.create');

//segunda ruta de crear contacto con metodo post (ruta que recibe el formulario)
Route::post('/nota/crear', [NotasController::class,'store'])
    ->name('nota.store');

//Ruta mostrar formulario editar contacto/actualizar
Route::get('/nota/{id}/editar', [NotasController::class, 'edit'])
    ->name('nota.edit')->where('id', '[0-9]+');

Route::put('/nota/{id}/editar', [NotasController::class,'update'])
    ->name('nota.update')->where('id', '[0-9]+');

//Ruta para ELIMINAR
Route::delete('/nota/{id}/borrar', [NotasController::class,'destroy'])
    ->name('nota.destroy')->where('id', '[0-9]+');