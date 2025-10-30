<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacoes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'produto_id',
        'tipo',
        'quantidade',
        'data_quantidade'
    ];

    public function produto(){
        return $this->belongsTo(Produto::class);
    }
}
