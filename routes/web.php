<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RoleController;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::resource('perfil', PerfilController::class)
    ->except(['index', 'destroy'])
    ->middleware('auth');
    
Route::resource('roles', RoleController::class)
    ->middleware('auth');

require __DIR__.'/settings.php';
