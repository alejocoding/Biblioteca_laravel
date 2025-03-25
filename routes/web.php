<?php
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\UserController;
use App\Models\prestamos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/layout', function () {
    return view('layouts.header');
});

Route::resource('books',BooksController::class);
Route::resource('Prestamo',PrestamosController::class);
Route::resource('User',UserController::class);


