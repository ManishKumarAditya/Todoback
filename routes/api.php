<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Todo;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/',[TodoController::class,"index"]);
Route::post('/create',[TodoController::class,"store"]);
Route::get('/delete/{id}',[TodoController::class,"destroy"]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
