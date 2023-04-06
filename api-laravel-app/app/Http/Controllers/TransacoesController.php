<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transacoes;

class TransacoesController extends Controller
{
    public function index()
    {
        return Transacoes::all();

        //Mostrar
        //id da transação
        //Data inicial
        //Data final;
        //Valor de compra;
        //Valor de venda;
        //Descrição da transação;
        //Duração da transação;
        //Resultado da transação;
    }

    public function show(Transacoes $article)
    {
        //Mostrar
        //id da transação
        //Data inicial
        //Data final;
        //Valor de compra;
        //Valor de venda;
        //Descrição da transação;
        //Duração da transação;
        //Resultado da transação;

        return $article;
    }

    public function store(Request $request)
    {
        $article = Transacoes::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Transacoes $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Transacoes $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
