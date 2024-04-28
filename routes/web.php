<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')
    ->prefix('/profile')
    ->controller(ProfileController::class)
    ->name('profile.')
    ->group(function () {
    Route::get('/', 'edit')->name('edit');
    Route::patch('/','update')->name('update');
    Route::delete('/','destroy')->name('destroy');
});

require __DIR__.'/auth.php';
