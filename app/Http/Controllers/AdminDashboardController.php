<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    // Construtor que aplica o middleware de autenticação e de verificação de administrador
    public function __construct()
    {
        // // Aplica o middleware de autenticação (auth)
        // $this->middleware('auth');

        // // Aplica o middleware de verificação de role (somente admin pode acessar)
        // $this->middleware(function ($request, $next) {
        //     if (Auth::check() && Auth::user()->role !== 'admin') {
        //         return redirect('/'); // Redireciona se não for admin
        //     }
        //     return $next($request);
        // });
    }

    // Página do dashboard
    public function index()
    {
        // // Buscar todos os administradores
        // $admins = User::where('role', 'admin')->get();

        // // Buscar todos os produtos
        // $products = Product::all();

        // // Passar as variáveis para a view
        // return view('admin.dashboard', compact('admins', 'products'));
    }

    // Outros métodos (createAdmin, storeAdmin, etc.)
}
