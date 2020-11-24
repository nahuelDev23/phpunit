<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusesController;
Route::get('/', function () {
    return view('welcome');
});

Route::post('statuses',[StatusesController::class,'store'])->name('statuses.store')->middleware(['auth:sanctum', 'verified']);

