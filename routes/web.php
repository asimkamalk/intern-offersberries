<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/opening', [AccountController::class, 'index'])->name('account.create');
Route::post('/opening', [AccountController::class, 'store'])->name('account.store');

Route::get('/accounts-list', [AccountController::class, 'list'])->name('account.list');


Route::get('/account/{id}', [AccountController::class, 'show'])->name('account.show');
