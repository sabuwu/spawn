<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

# - Controllers
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () { return view("landing"); });

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/catalogo', function () { 
    return view('pages.layout.catalogo'); 
})->middleware(['auth', 'verified'])->name('catalogo');

Route::get('/promocoes', function () {
    return view('pages.layout.promocoes');
})->middleware(['auth', 'verified'])->name('promocoes');

Route::get('/biblioteca', function () { 
    return view('pages.layout.biblioteca'); 
})->middleware(['auth', 'verified'])->name('biblioteca');

Route::get('/downloads', function () { 
    return view('pages.layout.downloads'); 
})->middleware(['auth', 'verified'])->name('downloads');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
