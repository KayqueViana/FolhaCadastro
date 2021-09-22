@extends('layouts.main')

@section('title', 'Lista de Usuários')
@section('content')

<section>

    <h2>
    <i class="fa fa-users"></i><span>Listar Usuários</span>
    </h2>
</section>
 <section class="content">
    <div class="box">
    <div class="box-header with-border">
        <div class="row margin-bottom-20">
            <div class="col-md-12 text-right">
            <a href="/criarUsuario" title="Novo Cadastro"><i class="fa fa-plus-square"></i>Inserir Clientes</a>
            </div>
        </div>
    </div>
    </div>
    <table class="table table-striped table-sl">
        <thead>
            <tr>
                <th class="text-center"><ion-icon name='list'></ion-icon>NOME:</th>
                <th class="text-center"><ion-icon name='list'></ion-icon>SOBRENOME:</th>
                <th class="text-center"><ion-icon name='at'></ion-icon>EMAIL:</th>
                <th class="text-center"><ion-icon name='phone-portrait'></ion-icon>TELEFONE:</th>
                <th class="text-center"><ion-icon name='people'></ion-icon>GENERO:</th>
                <th class="text-center"><ion-icon name='information'></ion-icon>OUTRAS INFORMAÇÕES:</th>
                <th class='text-center'><ion-icon name='construct'></ion-icon>AÇÕES:</th>
            </tr>
        </thead>
        @foreach ($clients as $client)
        <tbody>
            <tr>
                <td class='text-center'>{{$client->name}}</td>
                <td class="text-center">{{$client->surname}}</td>
                <td class="text-center">{{$client->email}}</td>
                <td class="text-center">{{$client->cell}}</td>
                @if($client->gender == 0)
                <td class="text-center">M</td>
                @elseif($client->gender == 1)
                <td class="text-center">F</td>              
                @else
                <td class="text-center">Não Informado</td>
                @endif
                <td class="text-center">
                    <a href="/{{ $client->id }}">
                    <button class="btn btn-dark"><ion-icon name='add'></ion-icon>Mais...</button>
                </a>
                </td>
                
            </tr>
         
        </tbody>
        @endforeach
        @if(count($clients) == 0)
        <div id="null">
      
        <p class="text-center">Não há ninguem cadastrado aqui...<ion-icon name="sad"></ion-icon>
        </p>
       
       </div>
       @endif
    </table>
 </section>
 @endsection