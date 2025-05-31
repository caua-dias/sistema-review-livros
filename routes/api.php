<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReaderController;

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
