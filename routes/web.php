<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestRoutingController;

Route::get('/', [TestRoutingController::class, 'index']);
Route::get('/form', [TestRoutingController::class, 'form']);
Route::post('/form/store', [TestRoutingController::class, 'store'])->name('form.store');
Route::get('/form/table', [TestRoutingController::class, 'table']);
Route::get('/form/table/welcome', [TestRoutingController::class, 'welcome']);