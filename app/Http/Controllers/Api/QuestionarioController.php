<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pergunta;
use App\Models\Alternativa;
use Illuminate\Support\Facades\DB;


class QuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pergunta =  Pergunta::inRandomOrder()->limit(1)->first();
       $alternativas = Pergunta::find($pergunta->id)->alternativas;

        return response()->json([
            'status' => true,
            'pergunta' => $pergunta,
            'alternativas'=> $alternativas
        ], 200);
    }
}
