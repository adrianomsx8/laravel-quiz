<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pergunta;
use Illuminate\Http\Request;
use App\Http\Requests\PerguntaRequest;

class PerguntaController extends Controller
{
    protected $pergunta;

    public function __construct(Pergunta $pergunta)
    {
        $this->pergunta = $pergunta;
    }

    public function pegarTodasPerguntas() {
        $perguntas = $this->pergunta::all();

        return response()->json([
            'status' => true,
            'perguntas' => $perguntas
        ]);
    }

    public function criarPergunta(Request $request) {
        $pergunta = $this->pergunta::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Pergunta criada com sucesso!",
            'pergunta' => $pergunta
        ], 200);
    }

    public function atualizarPergunta(Request $request, $id) {

        $pergunta =  $this->pergunta->findOrFail($id);
        $pergunta->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Pergunta Alterada com sucesso!",
            'post' => $pergunta
        ], 200);
    }

    public function excluirPergunta ($id) {
        $pergunta = $this->pergunta->findOrFail($id);
        $pergunta->delete();

        return response()->json([
            'status' => true,
            'message' => "Pergunta Excluida com sucesso!",
        ], 200);
    }
}
