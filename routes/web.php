<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortadaCont;

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

Route::get('/', [PortadaCont::class, 'index']);

Route::get('/portada', [PortadaCont::class, 'index']);

Route::any('/busqueda', [PortadaCont::class, 'buscar']);

Route::get('/resbusqueda', [PortadaCont::class, 'buscarprod']);

Route::get('/producto', [PortadaCont::class, 'product']);


