<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
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

Route::get('/estudiante', [EstudianteController::class, 'index'])->name('estudiante.index');
Route::get('/estudiante/create', [EstudianteController::class, 'create'])->name('estudiante.create');
Route::post('/store', [EstudianteController::class, 'store'])->name('estudiante.store');
Route::get('/edit/{id}', [EstudianteController::class, 'edit'])->name('paciente.edit');
Route::put('/update/{id}', [EstudianteController::class, 'update'])->name('paciente.update');
Route::delete('/destroy/{id}', [EstudianteController::class, 'destroy'])->name('paciente.destroy');