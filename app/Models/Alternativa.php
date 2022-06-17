<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
    use HasFactory;

    protected $table = 'alternativas';

    protected $fillable = ['resposta', 'pergunta_id', 'valor_resposta'];

    public function pergunta()
    {
        return $this->belongsTo(Pergunta::class);
    }

}
