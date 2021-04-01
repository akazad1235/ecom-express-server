<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorsController;
use App\Http\Controllers\ContactController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/visitor', [VisitorsController::class,'create'] );
// Route::resource('/contact',ContactController::class);
Route::resource('/contact', ContactController::class);