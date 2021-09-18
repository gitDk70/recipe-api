<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('recipes', RecipeController::class);



//public routes

Route::get('/recipes', [RecipeController::class,'index']);
Route::get('/recipes/{id}', [RecipeController::class, 'show']);
Route::get('/recipes/search/{title}', [RecipeController::class,'search']);

//protected routes (sancum)

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/recipes/search/{title}', [RecipeController::class,'search']);
    Route::post('/recipes', [RecipeController::class, 'store']);
    Route::put('/recipes/{id}', [RecipeController::class, 'update']);
    Route::delete('/recipes/{id}', [RecipeController::class, 'destroy']);
});
