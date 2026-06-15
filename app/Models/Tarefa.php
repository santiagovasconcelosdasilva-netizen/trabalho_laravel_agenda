<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = [
        'tarefa',
        'descricao',
        'categoria_id',
        'estado'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}