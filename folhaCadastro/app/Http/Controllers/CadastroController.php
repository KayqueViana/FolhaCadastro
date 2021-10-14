<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use App\Models\Adress;


class CadastroController extends Controller
{
    public function lista(Request $request){

      $search = request('search');
      $clients = Client::all();
      if(isset($_GET['search'])){
       
        $clients = DB::table('clients')->where('name', 'like', '%' .$search. '%')->paginate(7);

      }elseif(count($clients) == 0 && $search){

        $clients = Client::paginate(5);
        return redirect('/')->with('msg2', 'Não foi possível encontrar ninguem com esse nome...');

      }elseif(count($clients) == 0){

        return redirect('/')->with('msg2', 'Não há ninguem cadastrado aqui...');

      }else{

        $clients = Client::paginate(7);

      }
        
          return view("clientes.listar_clientes", ['clients' => $clients,'search' => $search]);
        
    }

   public function registro(){
    
    $search = request('search');
    $clients = Client::all();

    return view("criarUsuario", ['clients' => $clients, 'search' => $search]);
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
        return redirect('/')->with('msg2', 'Usuário deletado com sucesso!');
      }

      public function edit($id){

        $search = request('search');
        $clients = Client::all();
        $client = Client::findOrFail($id);

        return view('clientes.edit', ['client' => $client, 'search' => $search, 'clients' => $clients]);
      }

      public function update(Request $request){

        $data = $request->all();

        if($request->hasFile('img') && $request->file('img')->isValid()){
          $requestImg = $request->img;
          $extension = $requestImg->extension();
          $imageName = md5($requestImg->getClientOriginalName().strtotime("now")).".".$extension;
          $request->img->move(public_path('img/images'), $imageName);
          $data['img'] = $imageName;
          }

        Client::findOrFail($request->id)->update($data);

        return redirect('/')->with('msg', 'Usuário editado com sucesso!');
      }

}