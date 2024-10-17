<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jogosModel extends Model
{
    protected $table = 'jogos';

    protected $fillable  = [
        'nome',
        'categoria',
        'ano_criacao',
        'Valor', 
    ];
}
