<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('nosotros', 'about')->name('nosotros');
Route::view('servicios', 'service')->name('servicios');
Route::view('blog', 'blog')->name('blog');
Route::view('restauraciones', 'restauraciones')->name('restauraciones');
Route::view('profilaxis', 'profilaxis')->name('profilaxis');
Route::view('blanqueamiento', 'blanqueamiento')->name('blanqueamiento');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
