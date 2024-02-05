<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

// http://127.0.0.1:8000/dashboard/
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {

    route::get('/links', [LinkController::class, 'index']);
    route::get('/links/new', [LinkController::class, 'create']);
    route::post('/links/new', [LinkController::class, 'store']);
    route::get('/links/{link}', [LinkController::class, 'edit']);
    route::post('/links/{link}', [LinkController::class, 'update']);
    route::delete('/links/{link}', [LinkController::class, 'destroy']);

    Route::get('/settings', [UserController::class, 'edit']);
    Route::post('/settings', [UserController::class, 'update']);
});

Route::post('/visit/{link}', [VisitController::class, 'store']);

// http://127.0.0.1:8000/username
Route::get('/{user}', [UserController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
