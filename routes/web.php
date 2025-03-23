<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\DashboardController;
//use App\Http\Controllers\ListItemController;
use App\Http\Controllers\jualbaksoController;


Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

 //Route::get('/listbarang/{id}/{nama}', function($id, $nama){
   // return view('list_barang', compact('id', 'nama'));
 //});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('/login/{username}/{password}', function($username, $password){
    return view('login', compact('username', 'password'));
});

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

//Route::get('/listitem/{id}/{nama}', [ListItemController::class, 'tampilkan']);

Route::get('/jualbakso', [jualbaksoController::class, 'tampilkan']);