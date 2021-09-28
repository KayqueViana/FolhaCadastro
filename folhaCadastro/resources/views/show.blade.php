@extends('layouts.main')

@section('title', $client->name)

@section('content')
  <div class="col-md-10 offset-md-1">
      <div class="row">
              <div id="info-container" class="col-md-6">
                <h1><ion-icon name="code-working"></ion-icon>{{ $client->name }} {{ $client->surname}}</h1>
                <p class="client-email"><ion-icon name="finger-print"></ion-icon>ID do Usuário: {{ $client->id}}</p>
                <p class="client-email"><ion-icon name="at"></ion-icon>{{ $client->email}}</p>
                <p class="client-email"><ion-icon name="logo-whatsapp"></ion-icon>{{ $client->cell}}</p>

                @if( $client->gender == 0)
                <p class="client-email"><ion-icon name="people"></ion-icon>Masculino</p>
                @elseif( $client->gender == 1)
                <p class="client-email"><ion-icon name="people"></ion-icon>Feminino</p>
                @else
                <p class="client-email"><ion-icon name="people"></ion-icon>Não Informado</p>
                @endif

                <p class="client-email"><ion-icon name="mail-open"></ion-icon>{{ $client->text}}</p>
                <p class="client-email"><ion-icon name="business"></ion-icon>Cep: {{ $adress->cep }} - Rua: {{ $adress->adress }} - Bairro: {{ $adress->neighborhood }}</p>
                <p class="client-email"><ion-icon name="locate"></ion-icon>{{ $adress->city}}-{{ $adress->uf }}</p>
              </div>
      </div>
  </div>
@endsection