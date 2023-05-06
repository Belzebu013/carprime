<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'cadastro';
    protected $fillable = [
        'nome_cad',
        'user_cad',
        'senha_cad'
    ];
    use HasFactory;
}
