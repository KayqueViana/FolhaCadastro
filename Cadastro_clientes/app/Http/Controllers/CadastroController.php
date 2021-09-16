<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function lista() {
        return view('clientes.listar_clientes');
    }
    public function registro() {
        return view('/criarUsuario');
    }
}
