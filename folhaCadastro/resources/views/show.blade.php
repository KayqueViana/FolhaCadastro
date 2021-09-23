@extends('layouts.main')

@section('title', $client->name)

@section('content')
  <div class="col-md-10 offset-md-1">
      <div class="row">
              <div id="info-container" class="col-md-6">
                <h1><ion-icon name="code-working"></ion-icon>{{ $client->name }} {{ $client->surname}}</h1>
                <p class="client-email"><ion-icon name="at"></ion-icon>{{ $client->email}}</p>
                <p class="client-email"><ion-icon name="logo-whatsapp"></ion-icon>{{ $client->cell}}</p>
                <p class="client-email"><ion-icon name="people"></ion-icon>{{ $client->gender}}</p>
                <p class="client-email"><ion-icon name="mail-open"></ion-icon>{{ $client->text}}</p>
                <p class="client-email"><ion-icon name="business"></ion-icon>Cep: {{ $client->cep }} - Rua: {{ $client->adress }} - Bairro: {{ $client->neighborhood }}</p>
                <p class="client-email"><ion-icon name="locate"></ion-icon>{{ $client->city}}-{{ $client->uf }}</p>
              </div>
      </div>
  </div>
@endsection