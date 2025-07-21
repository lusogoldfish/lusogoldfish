    <?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuporteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdutoController::class, 'index'])->name('welcome');

// Rota para o dashboard usando o controller
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
});

require __DIR__.'/auth.php';

// Rota para a página "sobre"
Route::get('/sobre', function () {
    return view('sobre');
});

// Rota para a página "serviços"
Route::get('/servicos', function () {
    return view('servicos');
});

// Rotas para portfolio
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

// Rota para a página "equipa"
Route::get('/equipa', function () {
    return view('equipa');
});

// Rota para a página "suporte"
Route::get('/suporte', function () {
    return view('suporte');
})->name('suporte');

// Rota para processar o formulário de suporte
Route::post('/suporte', [SuporteController::class, 'store'])->name('suporte.store');

// Rotas para produtos - só para admin
Route::get('/produtos/criar', [ProdutoController::class, 'create'])
    ->middleware('auth')
    ->name('produtos.criar');

Route::post('/produtos', [ProdutoController::class, 'store'])
    ->middleware('auth')
    ->name('produtos.store');
