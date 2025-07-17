<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(){
        
        $nome = "Matheus";
        $idade = 25;

        $arr = [10,20,30,40,50];
        $nomes = ["matheus", "Maria", "Marcos", "will"];

        return view('welcome',
            ['nome' => $nome, 
            'idade' => $idade, 
            'profissao' => "programador",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function criarCadastro(){
        return view('cadastros.novoCadastro');
    }

}
