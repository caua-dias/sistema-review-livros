<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GenreController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(ReaderController::class)->group( function() {
    Route::get('/readers','get');
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
    Route::get('/genres/{id}', 'details');
    Route::post('/genres','store');
    Route::patch('/genres/{id}', 'update');
    Route::delete('/genres/{id}','delete');
});