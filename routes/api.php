<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;

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
Route::post('login', [AuthController::class,'login']);


Route::get('categorias',[CategoriaController::class,'index']);
Route::get('categorias/show/{id}',[CategoriaController::class,'show']);
Route::post('categorias/store',[CategoriaController::class,'store']);
Route::put('categorias/update/{id}',[CategoriaController::class,'update']);
Route::delete('categorias/delete/{id}',[CategoriaController::class,'destroy']);

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);

});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
