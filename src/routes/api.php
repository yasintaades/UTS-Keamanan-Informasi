<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupirController;

Route::middleware('client.auth')->group(function (){
    Route::get('/supirs', [SupirController::class, 'index']);
    // Route::post('/supirs', [SupirController::class, 'store']);
});