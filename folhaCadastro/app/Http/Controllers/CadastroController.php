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
        $cliente->cep = $request->cep;
        $cliente->adress = $request->adress;
        $cliente->neighborhood = $request->neighborhood;
        $cliente->city = $request->city;
        $cliente->uf = $request->uf;

        if($request->hasFile('img') && $request->file('img')->isValid()){
          $requestImg = $request->img;
          $extension = $requestImg->extension();
          $imageName = md5($requestImg->getClientOriginalName().strtotime("now")).".".$extension;
          $request->img->move(public_path('img/images'), $imageName);
          $cliente->img = $imageName;
          }

        $cliente->save();
        
       
       

        return redirect('/')->with('msg', 'Usuário cadastrado com sucesso!');
      }
      public function show($id){
        
        $client = Client::findOrFail($id);
    
        return view('show', ['client' => $client]);
      }

      public function destroy($id){
        Client::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Usuário deletado com sucesso!');
      }

      public function edit($id){

        $client = Client::findOrFail($id);

        return view('clientes.edit', ['client' => $client]);
      }

      public function update(Request $request){

        Client::findOrFail($request->id)->update($request->all());


        return redirect('/')->with('msg', 'Usuário editado com sucesso!');
      }
}