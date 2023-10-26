<?php

use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/news/{limit}', [NewsController::class, 'index']);
Route::get('/news-by-id/{id}', [NewsController::class, 'show']);
Route::get('/event-by-id/{id}', [EventsController::class, 'show']);
Route::get('/event/{limit}', [EventsController::class, 'index']);


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
