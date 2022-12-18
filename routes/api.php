<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PeopleController;

Route::get('swiezy/305435/people', [PeopleController::class, 'index']);
Route::post('swiezy/305435/people', [PeopleController::class, 'create']);
Route::get('swiezy/305435/people/{people}', [PeopleController::class, 'read']);
Route::put('swiezy/305435/people/{people}', [PeopleController::class, 'update']);
Route::delete('swiezy/305435/people/{people}', [PeopleController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
