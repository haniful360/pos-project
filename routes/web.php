<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserGroupsController;




Route::get('/', function () {
    // return Auth::user();
    return view('welcome');
});

// Route::group(['middleware' => 'auth'], function () {


// });
Route::get('dashboard', function () {
    // return Auth::user();
    return view('welcome');
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('groups', [UserGroupsController::class, 'index']);
Route::get('groups/create', [UserGroupsController::class, 'create']);
Route::post('groups', [UserGroupsController::class, 'store']);
Route::delete('groups/{id}', [UserGroupsController::class, 'destroy']);


Route::resource('users', UsersController::class);
Route::resource('categories', CategoriesController::class, ['except' => ['show']]);
Route::resource('products', ProductsController::class);

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'confirm'])->name('login.confirm');

// Route::get('users',[UsersController::class, 'index']);
// Route::get('users/{id}',[UsersController::class, 'show']);
// Route::get('users/create',[UsersController::class, 'create']);
// Route::post('users',[UsersController::class, 'store']);
// Route::get('users/{id}/edit',[UsersController::class, 'edit']);
// Route::put('users/{id}',[UsersController::class, 'update']);
// Route::delete('user/{id',[UsersController::class, 'destroy']);
