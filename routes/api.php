<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarouselItems;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/greeting', function () {return 'Hello World';});
Route::get('/carousel', [CarouselItems::class, 'index']);
Route::post('/carousel', [CarouselItems::class, 'store']);
Route::get('/carousel/{id}', [CarouselItems::class, 'show']);
Route::put('/carousel/{id}', [CarouselItems::class, 'update']);
Route::delete('/carousel/{id}', [CarouselItems::class, 'destroy']);