<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('portfolios.create');
});

// Portfolio Creation Flow
Route::get('/create', [PortfolioController::class, 'create'])->name('portfolios.create');
Route::post('/store', [PortfolioController::class, 'store'])->name('portfolios.store');

// Template Selection Flow
Route::get('/portfolio/{portfolio}/select-template', [PortfolioController::class, 'chooseTemplate'])->name('portfolios.template');
Route::post('/portfolio/{portfolio}/save-template', [PortfolioController::class, 'saveTemplate'])->name('portfolios.save_template');

// Generated Output View
Route::get('/portfolio/{portfolio}', [PortfolioController::class, 'show'])->name('portfolios.show');

// Manage (CRUD)
Route::get('/manage', [PortfolioController::class, 'index'])->name('portfolios.manage');
Route::get('/portfolio/{portfolio}/edit', [PortfolioController::class, 'edit'])->name('portfolios.edit');
Route::put('/portfolio/{portfolio}', [PortfolioController::class, 'update'])->name('portfolios.update');
Route::delete('/portfolio/{portfolio}', [PortfolioController::class, 'destroy'])->name('portfolios.destroy');
