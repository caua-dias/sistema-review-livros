<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(ReaderController::class)->group( function() {
    Route::get('/readers','get');
    Route::get('/readers/{id}/reviews', 'getReaderReviews'); 
    Route::get('/readers/{id}', 'details');
    Route::post('/readers','store');
    Route::patch('/readers/{id}', 'update');
    Route::delete('/readers/{id}','delete');
});

Route::controller(ReviewController::class)->group( function() {
    Route::get('/reviews','get');
    Route::get('/reviews/{id}', 'details');
    Route::post('/reviews','store');
    Route::patch('/reviews/{id}', 'update');
    Route::delete('/reviews/{id}','delete');
});

Route::controller(GenreController::class)->group( function() {
    Route::get('/genres','get');
    Route::get('/genres/with-books', 'getGenresWithBooks');   
    Route::get('/genres/{id}', 'details');
    Route::post('/genres','store');
    Route::patch('/genres/{id}', 'update');
    Route::delete('/genres/{id}','delete');
    Route::get('/genres/{id}/books', 'getGenreBooks');
});

Route::controller(BookController::class)->group( function() {
    Route::get('/books','get');
    Route::get('/books/with-relations', 'getBooksWithRelations'); 
    Route::get('/books/{id}', 'details');
    Route::post('/books','store');
    Route::patch('/books/{id}', 'update');
    Route::delete('/books/{id}','delete');
    Route::get('/books/{id}/reviews', 'getBookReviews');
});

Route::controller(AuthorController::class)->group( function() {
    Route::get('/authors','get');
    Route::get('/authors/with-books', 'getAuthorsWithBooks');
    Route::get('/authors/{id}', 'details');
    Route::post('/authors','store');
    Route::patch('/authors/{id}', 'update');
    Route::delete('/authors/{id}','delete');
    Route::get('/authors/{id}/books', 'getAuthorBooks');
});