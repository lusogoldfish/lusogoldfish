<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuporteController extends Controller
{
    public function enviar(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'orderNumber' => 'required|string|max:50',
            'message' => 'required|string|max:1000',
        ]);

        // Aqui você pode enviar um email, salvar no banco, etc.
        // Exemplo: enviar email (configure o Mail no Laravel)
        // Mail::to('suporte@lusogoldfish.com')->send(new SuporteMail($request->all()));

        return redirect()->back()->with('success', 'O seu pedido de suporte foi enviado com sucesso!');
    }
}
