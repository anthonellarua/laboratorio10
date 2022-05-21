<?php

use Illuminate\Support\Facades\Route;
use App\Models\Videos;

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
Route::get('/musica', function () {
    return view('musica');
});
Route::get('/fotos', function () {
    return view('fotos');
});
#########################################
###Accede a la base de datos de videos
#########################################
Route::get('/videos', function () {
    return Videos::All();
});
Route::get('/perfil', function () {
    return view('perfil');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
