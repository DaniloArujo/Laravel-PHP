<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Matheus";
        $idade = 14;
        $arr = [1,2,3,4,5];
        $nomes =["Danilo", "Carlos", "Bruno","Pedro","Fabiano","Túlio"];

        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => "Programador",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }
    public function create(){
        return view('events.create');
    }
}
