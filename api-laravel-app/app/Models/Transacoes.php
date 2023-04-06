<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transacoes extends Model
{

    protected $fillable = ['datainicio', 'datafim', 'valor_compra', 'valor_venda', 'descricao'];
}
