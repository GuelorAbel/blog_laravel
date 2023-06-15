<?php

use App\Http\Controllers\Api\PostController;
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


// utilisation de l'apiressource de laravel
Route::prefix('admin')->group(function () {
    Route::apiResource('posts', PostController::class); //Cette écriture me donne accès à l'ensemble des méthodes du controllers postcontrller
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
