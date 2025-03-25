<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role !== 'admin') {
            return redirect('/'); // Redireciona para a home se não for admin
        }

        return view('dashboard'); // Exibe a view se for admin
    }
}
//
