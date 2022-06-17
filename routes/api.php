<?php

use App\Http\Controllers\Api\PerguntaController;
use App\Http\Controllers\Api\AlternativaController;
use App\Http\Controllers\Api\QuestionarioController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('perguntas', PerguntasController::class);
//Route::apiResource('alternativas', AlternativasController::class);

Route::resource('pergunta', PerguntaController::class);
Route::resource('alternativa', AlternativaController::class);
Route::get('/questionario', [QuestionarioController::class, 'index']);



