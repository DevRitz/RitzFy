<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaControler extends Controller
{
    public function index()
    {
        $pessoa = Pessoa::all();
        dd($pessoa);
    }

    public function insert()
    {
        $pessoa = new Pessoa(); // Referencia o model Pessoa
        $pessoa->pessoa_nome = "rogers";
        $pessoa->pessoa_idade = 23;
        $pessoa->pessoa_observacao = "palmeiras nao tem mundial";
        $pessoa->save();
    }
}
