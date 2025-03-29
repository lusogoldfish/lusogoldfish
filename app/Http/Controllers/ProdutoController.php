<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produtos::all();

        return view('welcome', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.criar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
            'tipo' => 'required|in:peixe,acessorio',
            'cor' => 'nullable|string',
            'tamanho' => 'nullable|in:pequeno,medio,grande',
            'categoria_acessorio' => 'nullable|string',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $produto = new Produtos;
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');
        $produto->tipo = $request->input('tipo');
        $produto->cor = $request->input('cor');
        $produto->tamanho = $request->input('tamanho');
        $produto->categoria_acessorio = $request->input('categoria_acessorio');

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $imagemPath = $imagem->store('produtos', 'public');
            $produto->imagem = $imagemPath;
        }

        $produto->save();

        return redirect()->route('welcome')->with('success', 'Produto adicionado com sucesso!');
    }
}
