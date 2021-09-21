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
                <th class="text-center">NOME:</th>
                <th class="text-center">SOBRENOME:</th>
                <th class="text-center">EMAIL:</th>
                <th class="text-center">TELEFONE:</th>
                <th class="text-center">GENERO:</th>
                <th class="text-center">CIDADE:</th>
                <th class='text-center'>AÇÕES:</th>
            </tr>
        </thead>
        @foreach ($clients as $client)
        <tbody>
            <tr>
                <td class='text-center'>{{$client->name}}</td>
                <td class="text-center">{{$client->surname}}</td>
                <td class="text-center">{{$client->email}}</td>
                <td class="text-center">{{$client->cell}}</td>
                <td class="text-center">{{$client->gender}}</td>
                <td class="text-center">
                    <a href="/adressPage">
                    <button class="btn btn-dark">Avaliar...</button>
                </a>
                </td>
                
            </tr>
         
        </tbody>
        @endforeach
    </table>
 </section>
 @endsection