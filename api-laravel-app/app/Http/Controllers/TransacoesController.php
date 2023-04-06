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

    public function show(Transacoes $transacao)
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

        return $transacao;
    }

    public function store(Request $request)
    {
        $transacao = Transacoes::create($request->all());

        return response()->json($transacao, 201);
    }

    public function update(Request $request, Transacoes $transacao)
    {
        $transacao->update($request->all());

        return response()->json($transacao, 200);
    }

    public function delete(Transacoes $transacao)
    {
        $transacao->delete();

        return response()->json(null, 204);
    }
}
