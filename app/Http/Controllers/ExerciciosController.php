<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function exer1Form()
    {
        return view('exer1');
    }
    public function exer2Form(){

        return view('exer2');
    }
    public function exer3Form(){

        return view('exer3');
    }
    public function exer4Form(){

        return view('exer4');
    }
    public function exer5Form(){

        return view('exer5');
    }
    public function exer1Resultado(Request $request)
    {
        $valor_produto = $request['valor_produto'];
        $valor_pago = $request['valor_pago'];
        if ($valor_pago == $valor_produto)
            $resultado = "Não há troco!";
        elseif($valor_pago<$valor_produto)
            $resultado = "Valor insuficiente para pagamento!";
        else
            $resultado = "Valor do troco: ".($valor_pago - $valor_produto);
        return view('exer1', compact('resultado'));
    }
    public function exer2Resultado(Request $request)
    {
        $valor_kg_produto = $request->valor_kg_produto;
        $quantidade = $request->quantidade;
        $resultado = "R$ ".$valor_kg_produto * $quantidade;
        return view('exer2',compact('resultado'));
    }
    public function exer3Resultado(Request $request)
    {
        $numero = $request->numero;
        if($numero > 10){
            $resultado = 'O numero informado é maior que 10';
        }elseif($numero == 10){
            $resultado = 'O numero informado é igual 10';
        }else{
            $resultado = 'O numero informado é menor que 10';
        }
        return view('exer3',compact('resultado'));
    }
    public function exer4Resultado(Request $request)
    {
        $numero = $request->numero;
        if($numero > 0){
            $resultado = 'Positivo';
        }elseif($numero == 0){
            $resultado = 'Igual a zero';
        }else{
            $resultado = 'Negativo';
        }
        return view('exer4',compact('resultado'));
    }
    public function exer5Resultado(Request $request)
    {
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;
        $nota4 = $request->nota4;
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        if($media >= 7){
            $resultado = 'Média '. $media . ' Aprovado';
            $alert = 'alert-success';
        }else{
            $resultado = 'Média '. $media . ' Reprovado';
            $alert = 'alert-danger';

        }
        return view('exer5',compact('resultado','alert'));
    }
}
