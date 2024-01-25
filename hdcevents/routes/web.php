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
Route::get('/events/create', [EventsController::class, 'create'])->middleware('auth');
// show padrao de acesso para exibir dados especificos
Route::get('/events/{id}', [EventsController::class, 'show']);
// store padrao de acesso para enviar / registrar os dados no banco
Route::post('/events', [EventsController::class, 'store']);

Route::get('/dashboard', [EventsController::class, 'dashboard'])->middleware('auth');

Route::delete('/events/{id}', [EventsController::class, 'destroy']);

Route::get('/events/edit/{id}', [EventsController::class, 'edit'])->middleware('auth');

Route::put('/events/update/{id}', [EventsController::class, 'update'])->middleware('auth');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::post('/events/join/{id}', [EventsController::class, 'joinEvent'])->middleware('auth');
Route::delete('/events/leave/{id}', [EventsController::class, 'leaveEvent'])->middleware('auth');
