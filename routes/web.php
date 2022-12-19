<?php

use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\postController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
});

// user
Route::resource("/user", userController::class);

// Post

Route::get("posts", [postController::class, 'index']);
Route::post("posts/store",[postController::class, 'store']);
Route::delete("posts/{id}",[postController::class, 'destroy']);
Route::get('posts/{id}/edit',[postController::class, 'edit']);
Route::patch('posts/{id}' ,[postController::class, 'update']);

// Category
Route::get("categories",[categoryController::class,'index']);