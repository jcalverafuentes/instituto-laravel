<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SetLanguageController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'main') ->name('main');
Route::view("/about", "about");

//Route::get('/dashboard', function () {
 //   return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource("alumnos", AlumnoController::class)->middleware('auth');

Route::get('profesores', [UserController::class])->name('profesores_listado');

Route::get('role_alumno', [UserController::class, 'getAlumnos'])->name('alumnos_listado');

Route::get('lang/{lang}', SetLanguageController::class)->name('set_lang');



