<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class CadastroController extends Controller
{
    public function lista(){

        $clients = Client::all();

            return view("clientes.listar_clientes", ['clients' => $clients]);
    }

    public function adress(){
      
      return view('adressPage');

    }

   public function registro(){

    return view("criarUsuario");
   }

     public function store(Request $request){

        $cliente = new Client;

        $cliente->name = $request->name;
        $cliente->surname = $request->surname;
        $cliente->email = $request->email;
        $cliente->cell = $request->cell;
        $cliente->gender = $request->gender;
        $cliente->adress = $request->adress;

        $cliente->save();

        return redirect('/');
      }
}