<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserGroupsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('groups',[UserGroupsController::class, 'index']);
Route::get('groups/create',[UserGroupsController::class, 'create']);
Route::post('groups',[UserGroupsController::class, 'store']);
Route::delete('groups/{id}',[UserGroupsController::class, 'destroy']);


Route::resource('users', UsersController::class);
Route::resource('categories', CategoriesController::class, ['except' =>['show']]);
Route::resource('products', ProductsController::class);



// Route::get('users',[UsersController::class, 'index']);
// Route::get('users/{id}',[UsersController::class, 'show']);
// Route::get('users/create',[UsersController::class, 'create']);
// Route::post('users/create',[UsersController::class, 'store']);
// Route::get('users/{id}/edit',[UsersController::class, 'edit']);
// Route::put('users/{id}',[UsersController::class, 'update']);
// Route::delete('user/{id',[UsersController::class, 'destroy']);