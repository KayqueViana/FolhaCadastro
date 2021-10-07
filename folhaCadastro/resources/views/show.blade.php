@extends('layouts.main')

@section('title',  $client->name)

@section('content')
  <div class="col-md-10 offset-md-1">
      <div class="row">
        <div id="img-container" class="col-md-6">
          <img src="/img/images/{{ $client->img }}" class="img-fuid" alt="{{ $client->name }}">
        </div>
              <div id="info-container" class="col-md-6">
                <h1><ion-icon name="code-working"></ion-icon>{{ $client->name }} {{ $client->surname}}</h1>
                <p class="client-id"><ion-icon name="finger-print"></ion-icon><b>ID do Usuário: {{ $client->id}} </b></p>
                <p class="client-email"><ion-icon name="at"></ion-icon>{{ $client->email}}</p>
                <p class="client-cell"><ion-icon name="logo-whatsapp"></ion-icon>{{ $client->cell}}</p>

                @if( $client->gender == 0)
                <p class="client-gender"><ion-icon name="people"></ion-icon>Masculino</p>
                @elseif( $client->gender == 1)
                <p class="client-gender"><ion-icon name="people"></ion-icon>Feminino</p>
                @else
                <p class="client-gender"><ion-icon name="people"></ion-icon>Não Informado</p>
                @endif

                @if( $client->text == null)
                <h6 class="client-text"><ion-icon name="mail-open"></ion-icon><u>Nenhum texto foi adicionado aqui</u><ion-icon name="sad"></ion-icon></h6>
                @else
                <p class="client-text"><ion-icon name="mail-open"></ion-icon>{{ $client->text}}</p>
                @endif
                <p class="client-adress"><ion-icon name="business"></ion-icon>Cep: {{ $client->cep }} - Rua: {{ $client->adress }} - Bairro: {{ $client->neighborhood }}</p>
                <p class="client-adress"><ion-icon name="locate"></ion-icon>{{ $client->city}}-{{ $client->uf }}</p>
              </div>
      </div>
  </div>
@endsection