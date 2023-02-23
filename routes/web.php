<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;

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
    return view('index');
});

/*Route::get('/usuario', function () {
    return view('usuario.index');
});
Route::get('/usuario', function () {
  return view('usuario.create');
});
*/
//Route::get('/categoria', function () {
  //  return view('categoria.index');
//});

Route::resource('usuario',UsuarioController::class);
Route::resource('categoria',CategoriaController::class);

Route::get('dashboard',function (){
  return View('layout.dashboard');
});
