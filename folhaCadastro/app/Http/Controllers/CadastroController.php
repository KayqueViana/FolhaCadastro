<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\Adress;



class CadastroController extends Controller
{
    public function lista(){
        $search = request('search');
        if($search){

          $clients = Client::where([

              ['name', 'like', '%'.$search.'%']

          ])->get();//get indica que você quer pegar os dados de busca;

        }else{
          $clients = Client::all();
        }

            return view("clientes.listar_clientes", ['clients' => $clients,'search' => $search]);
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
        $cliente->save();
       
     
        $adress = new Adress;

        $adress->user_id = $cliente->id;
        $adress->cep = $request->cep;
        $adress->adress = $request->adress;
        $adress->neighborhood = $request->neighborhood;
        $adress->city = $request->city;
        $adress->uf = $request->uf;

        $adress->save();
       
       

        return redirect('/')->with('msg', 'Usuário cadastrado com sucesso!');
      }
      public function show($id){
        
        $client = Client::findOrFail($id);
        $adress = Adress::all();
        return view('show', ['client' => $client, 'adress' => $adress]);
      }
}