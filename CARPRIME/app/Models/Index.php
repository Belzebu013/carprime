<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table = 'vendas';
    protected $fillable = [
        'id_venda',
        'Funcionario',
        'vl_venda',
        'dt_venda'
    ];

    use HasFactory;
}
