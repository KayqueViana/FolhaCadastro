@extends('layouts.html-sec')

@section('title',  $client->name)

@section('content')

  @if($client->img == null)
  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="img-container" class="animate__animated animate__rollIn col-md-6">
        <a href="/clientes/edit/{{ $client->id }}"><img src="/img/noImage.png" class="img-fuid" alt="Default.img"></a>
      </div>

  @else
 
  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="img-container" class="animate__animated animate__rollIn col-md-6">
        <img src="/img/images/{{ $client->img }}" class="img-fuid" alt="{{ $client->name }}">
      </div>
      @endif
              <div id="info-container" class="animate__animated animate__backInRight col-md-6">
                <h1><ion-icon name="code-working" id="icons"></ion-icon>{{ $client->name }} {{ $client->surname}}</h1>
                <p class="client-id"><ion-icon name="finger-print" id="icons"></ion-icon><b>ID do Usuário: {{ $client->id}} </b></p>
                <p class="client-email"><ion-icon name="at" id="icons"></ion-icon>{{ $client->email}}</p>
                <p class="client-cell"><ion-icon name="logo-whatsapp" id="icons"></ion-icon>{{ $client->cell}}</p>

                @if( $client->gender == 0)
                <p class="client-gender"><ion-icon name="people" id="icons"></ion-icon>Masculino</p>
                @elseif( $client->gender == 1)
                <p class="client-gender"><ion-icon name="people" id="icons"></ion-icon>Feminino</p>
                @else
                <p class="client-gender"><ion-icon name="people" id="icons"></ion-icon>Não Informado</p>
                @endif

                @if($client->text == null)
                <h6 class="client-text"><ion-icon name="mail-open" id="icons"></ion-icon><u>Nenhum texto foi adicionado aqui</u><ion-icon name="sad"></ion-icon></h6>
                @else
                <p class="client-text"><ion-icon name="mail-open" id="icons"></ion-icon>{{ $client->text}}</p>
                @endif
                <p class="client-adress"><ion-icon name="business" id="icons"></ion-icon>Cep: {{ $client->cep }} - Rua: {{ $client->adress }} - Bairro: {{ $client->neighborhood }}</p>
                <p class="client-adress"><ion-icon name="locate" id="icons"></ion-icon>{{ $client->city}}-{{ $client->uf }}</p>
                <table>
                  <td class="text-center">
                <a href="/clientes/edit/{{ $client->id }}" class="btn btn-warning edit-btn"><ion-icon name="create"></ion-icon>Editar</a>
                    <form action="/{{ $client->id }}" method="post" id="form-delete">
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash"></ion-icon>Deletar</button>
                      </form>
                    </td>
                    </table>
              </div>
      </div>
  </div>
@endsection