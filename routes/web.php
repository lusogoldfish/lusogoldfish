<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Definindo a rota para o dashboard
Route::get('/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware('auth'); // Somente usuários autenticados podem acessar

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/create-admin', [AdminDashboardController::class, 'createAdmin'])->name('create-admin');
    Route::post('/store-admin', [AdminDashboardController::class, 'storeAdmin'])->name('store-admin');
    Route::get('/create-product', [AdminDashboardController::class, 'createProduct'])->name('create-product');
    Route::post('/store-product', [AdminDashboardController::class, 'storeProduct'])->name('store-product');
});

Route::get('/suporte', function () {
    return view('suporte');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(AdminMiddleware::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', [ProdutoController::class, 'index'])->name('welcome');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');

Route::get('/produtos/criar', [ProdutoController::class, 'create'])->name('produtos.criar');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

require __DIR__.'/auth.php';
