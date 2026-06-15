<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nomeCategoria'
    ];

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }
}