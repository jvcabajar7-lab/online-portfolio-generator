<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// 1. Root URL: Redirects guests to login, or create form if logged in
Route::get('/', function () {
    return auth()->check() ? redirect()->route('portfolios.create') : redirect('/login');
});

// 2. Laravel Breeze Authentication Routes
require __DIR__.'/auth.php';

// 3. Protected Portfolio Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('portfolios.create');
    })->name('dashboard');

    Route::get('/portfolios/create', [PortfolioController::class, 'create'])->name('portfolios.create');
    Route::post('/store', [PortfolioController::class, 'store'])->name('portfolios.store');
    Route::get('/portfolio/{portfolio}/select-template', [PortfolioController::class, 'chooseTemplate']);
    Route::post('/portfolio/{portfolio}/save-template', [PortfolioController::class, 'saveTemplate']);
});

// 4. Public Portfolio Viewing
Route::get('/portfolio/{portfolio}', [PortfolioController::class, 'show'])->name('portfolios.show');