<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index() {
        return view('/index');
    }
    public function registro() {
        return view('/criarUsuario');
    }
    public function lista() {
        return view('clientes.listar_clientes');
    }
}
