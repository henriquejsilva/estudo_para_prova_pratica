<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

     protected $fillable = [
        'id',
        'nome',
        'email',
        'senha'
    ];

    public function movimentacoes()
    {
        return $this->hasMany(Movimentacoes::class);
    }
}
