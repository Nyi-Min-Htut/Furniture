<?php

use App\Http\Controllers\Management\AdminAuthController;
use App\Http\Controllers\Management\CategoryController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories',[CategoryController::class,'testing']);
Route::post('/login',[AdminAuthController::class,'login']);
Route::post('/register',[AdminAuthController::class,'registerOrUpdate']);


// admin crud

Route::put('/admin',[AdminAuthController::class,'registerOrUpdate']);
Route::delete('/admin/{id}',[AdminAuthController::class,'adminDelete']);