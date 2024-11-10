<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    FilmController,
    
};

Route::get('/', [FilmController::class, 'movieHome'])->name('home');
Route::get('/movies', [FilmController::class, 'movies'])->name('movies');
Route::get('/movies/{film}', [FilmController::class, 'show'])->name('movies.show');
Route::get('/movies/{film}/store', [FilmController::class, 'store'])->name('film.store');
Route::get('/movies/genre/{genre}', [FilmController::class, 'moviesByGenre'])->name('genre');

// Resource route for film (if you're using CRUD actions)
Route::post('/movies/{film}/kritik', [FilmController::class, 'store'])->name('kritik.store');
Route::get('/movies/{kritik}/edit', [FilmController::class, 'edit'])->name('kritik.edit');
Route::put('/movies/{kritik}', [FilmController::class, 'update'])->name('kritik.update');
Route::get('/movies/{kritik}/show', [FilmController::class, 'show'])->name('kritik.show');
Route::delete('/movies/{kritik}', [FilmController::class, 'destroy'])->name('kritik.destroy');
Route::resource('film', FilmController::class)->parameters([
    'film' => 'film'
]);