<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    use HasFactory;

    protected $table = 'perguntas';

    protected $fillable = ['id','questao'];

    public function alternativas()
    {
        return $this->hasMany(Alternativa::class);
    }

}
