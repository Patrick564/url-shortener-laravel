<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\RetrieveUrlController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/{id}', [RetrieveUrlController::class, 'retrieve']);

Route::post('/create', [CreateController::class, 'create']);
