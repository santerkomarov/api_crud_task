<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApiController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\ProfileController;
use App\Http\Controllers\api\PostController; 
use App\Http\Controllers\api\CategoryController;

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

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);

    // Profile
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile/create', [ProfileController::class, 'store']);
    Route::post('/profile/update/', [ProfileController::class, 'update']);
    Route::post('/profile/delete', [ProfileController::class, 'delete']);

    // Post
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/post/{id}', [PostController::class, 'show']);
    Route::post('/post/create', [PostController::class, 'store']);
    Route::post('/post/update', [PostController::class, 'update']);
    Route::post('/post/delete/{id}', [PostController::class, 'delete']);

    // Category
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/category/{id}', [CategoryController::class, 'show']);
    Route::post('/category/create', [CategoryController::class, 'store']);
    Route::post('/category/update', [CategoryController::class, 'update']);
    Route::post('/category/delete', [CategoryController::class, 'delete']);
});
