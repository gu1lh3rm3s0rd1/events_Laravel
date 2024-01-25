<?php

use App\Http\Controllers\EventsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// index padrao de acesso para os registros
Route::get('/', [EventsController::class, 'index']);
// create padrao de acesso para criar componentes no banco
Route::get('/events/create', [EventsController::class, 'create']);
// show padrao de acesso para exibir dados especificos
Route::get('/events/{id}', [EventsController::class, 'show']);
// store padrao de acesso para enviar / registrar os dados no banco
Route::post('/events', [EventsController::class, 'store']);
