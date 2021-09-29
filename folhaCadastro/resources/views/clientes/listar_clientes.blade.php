@extends('layouts.main')

@section('title', 'Lista de Usuários')
@section('content')


<section>
    <div id="search-container" class="col-md-12">
        <h1 class="text-center"><ion-icon name="search"></ion-icon>Busque por alguem...</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procure por alguem aqui..." autofocus>
        </form>
    </div>
    @if($search)
    <h2 class="text-center">
        <i class="fa fa-users"></i><span>Você buscou por:</span>
        </h2>
        <p class="text-center"><a href="/" class="btn btn-dark">Ver todos??</a></p>
    @else
    <h2 class="text-center">
        <i class="fa fa-users"></i><span>Lista de Usuários</span>
        </h2>
    @endif
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
                <th class="text-center"><ion-icon name='finger-print'></ion-icon>ID:</th>
                <th class="text-center"><ion-icon name='list'></ion-icon>NOME:</th>
                <th class="text-center"><ion-icon name='list'></ion-icon>SOBRENOME:</th>
                <th class="text-center"><ion-icon name='at'></ion-icon>EMAIL:</th>
                <th class="text-center"><ion-icon name='logo-whatsapp'></ion-icon>TELEFONE:</th>
                <th class="text-center"><ion-icon name='people'></ion-icon>GENERO:</th>
                <th class="text-center"><ion-icon name='information'></ion-icon>OUTRAS INFORMAÇÕES:</th>
                <th class='text-center'><ion-icon name='construct'></ion-icon>AÇÕES:</th>
            </tr>
        </thead>
        @foreach ($clients as $client)
        <tbody>
            <tr>
                <td class="text-center">{{$client->id}}</td>
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
                    <button class="btn btn-dark"><ion-icon name='more'></ion-icon>Mais...</button>
                </a>
                </td>
                <td class="text-center">
                    <a href="/clientes/edit/{{ $client->id }}" class="btn btn-warning edit-btn"><ion-icon name="create"></ion-icon>Editar</a>
                    <form action="/{{ $client->id }}" method="post" id="form-delete">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash"></ion-icon>Deletar</button>
                    </form>
                </td>
            </tr>
         
        </tbody>
        @endforeach
        @if(count($clients) == 0 && $search)
        <div id="null">
        <p class="text-center">Não foi possível encontrar ninguem com o nome {{ $search }}...
        <a href="/" class="btn btn-dark">Ver todos??</a>
    </p>
       </div>
       @elseif(count($clients) == 0)
       <div id="null">
        <p class="text-center">Não há ninguem cadastrado aqui...<ion-icon name="sad"></ion-icon></p>
       </div>
       @endif
    </table>
 </section>
 @endsection