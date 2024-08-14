<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/profile', [ProfileController::class, 'index']);
