<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class CadastroController extends Controller
{
    public function lista(){

        $search = request('search');

        if($search) {

          $clients = Client::where([

              ['name', 'like', '%'.$search.'%']

          ])->get();

        }else{
          $clients = Client::all();
        }

            return view("clientes.listar_clientes", ['clients' => $clients, 'search' => $search]);
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
        $cliente->text = $request->text;
        $cliente->cep = $request->cep;
        $cliente->adress = $request->adress;
        $cliente->neighborhood = $request->neighborhood;
        $cliente->city = $request->city;
        $cliente->uf = $request->uf;

        $cliente->save();

        return redirect('/')->with('msg', 'Usuário cadastrado com sucesso!');
      }
      public function show($id){
        
        $client = Client::findOrFail($id);
        return view('show', ['client' => $client]);
      }
}

