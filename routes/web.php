<?php
use App\http\Controllers\ExpenseController;
use App\http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('expenses', ExpenseController::class);

Route::resource('categories', CategoryController::class);