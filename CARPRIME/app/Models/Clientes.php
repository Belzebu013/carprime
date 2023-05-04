<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    protected $fillable = [
        'id_cliente',
        'cpf_cliente',
        'email_cliente',
        'ds_endereco',
        'dt_nascimento',
        'nm_telefone'
    ];
    use HasFactory;
}
