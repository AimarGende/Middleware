<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorForm;

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
})->middleware('hacerlog');


Route::controller(ControladorForm::class)->group(function (){
    Route::get('/hola','rutaHola');
    Route::get('/bien','rutaBien');
    Route::post('/forms','getDatos');
    //Route::(post o get)('/nombre de ruta, 'nombre de funcion');
});


/*
Route::get('/hola',[ControladorForm::class,'rutaHola']);

Route::get('/bien',[ControladorForm::class,'rutaBien']);

Route::post('/forms',[ControladorForm::class,'getDatos']);
*/