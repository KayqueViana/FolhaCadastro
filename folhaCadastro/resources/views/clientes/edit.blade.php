@extends('layouts.main')

@section('title', 'Editando: ' . $client->name)

@section('content')
 <section class="container animate__animated animate__fadeIn">
    
    <div class="box">
        <div class="box-header">
            <div class="box-title">
                <h2 class="text-center animate__animated animate__bounceIn"><ion-icon name="create"></ion-icon>Editando: {{ $client->name }}</h2>
            </div>
            <hr size="3" width="65%" class="linha animate__animated animate__bounceIn">
            <div class="box-body">
                <form action="/update/{{ $client->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="img" class="animate__animated animate__bounceIn"><ion-icon name="images"></ion-icon>IMAGEM:</label>
                        <input type="file" id="img" name="img" class='form-control-file'>
                        <img src="/img/images/{{ $client->img }}" alt="{{ $client->name }}.img" id="edit-img">
                
                    </div>
                   
                    <div class="row">
                        <div class="col-md-12">
                         <label for="name" class="animate__animated animate__bounceIn"><ion-icon name="information-circle"></ion-icon>PRIMEIRO NOME:</label>
                         <input class="form-control" id="name" name="name" type="text" required placeholder="Digite seu primeiro nome..." value="{{ $client->name}}" autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="sobrenome" class="animate__animated animate__bounceIn>"<ion-icon name="information-circle"></ion-icon>SOBRENOME:</label>
                         <input class="form-control" id="surname" name="surname" type="text" required placeholder="Digite seu sobrenome..." value="{{ $client->surname}}" autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="email" class="animate__animated animate__bounceIn"><ion-icon name="at"></ion-icon>EMAIL:</label>
                         <input class="form-control" id="email" name="email" type="email" required placeholder="Digite aqui seu email..." value="{{ $client->email}}" autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="phone" class="animate__animated animate__bounceIn"><ion-icon name="phone-portrait"></ion-icon>TELEFONE:</label>
                         <input class="form-control" id="cell" name="cell" type="tel" required placeholder="Digite seu telefone..." value="{{ $client->cell}}" autofocus>
                        </div>
                        <div class="col-md-12">
                            <label for="text" class="animate__animated animate__bounceIn">UM POUCO SOBRE VOCÊ:</label>
                            <input class="form-control" id="text" name="text" type="textarea" placeholder="Digite uma mensagem legal..." value="{{ $client->text}}" autofocus>
                           </div>
                        <div class="col-md-12">
                        <label for="gender" class="animate__animated animate__bounceIn"><ion-icon name="male"></ion-icon>GENERO:<ion-icon name="female"></ion-icon></label>
                         <select name="gender" id="gender" class="form-control" required autofocus value="{{ $client->gender}}">
                            <option value="0" {{$client->gender == 0 ? "selected":"selected"}}>Masculino</option>
                            <option value="1" {{$client->gender == 1 ? "selected":"selected"}}>Feminino</option>
                            <option value="2" {{$client->gender == 2 ? "selected":"selected"}}>Prefiro não informar</option>
                         </select>
                        </div>
                        <div class="col-md-4">
                         <label for="cep" class="animate__animated animate__bounceIn"><ion-icon name="business"></ion-icon>CEP:</label>
                         <input class="form-control" id="cep" name="cep" type="text" onblur="pesquisacep(this.value);" required placeholder="00.000-000..." value="{{ $client->cep}}" autofocus>
                        </div>
                        <div class="col-md-4">
                         <label for="adress" class="animate__animated animate__bounceIn"><ion-icon name="business"></ion-icon>RUA:</label>
                         <input class="form-control" id="adress" name="adress" type="text" required placeholder="Digite sua rua..." value="{{ $client->adress}}" autofocus>
                        </div>
                        <div class="col-md-4">
                         <label for="neighborhood" class="animate__animated animate__bounceIn"><ion-icon name="business"></ion-icon>BAIRRO:</label>
                         <input class="form-control" id="neighborhood" name="neighborhood" type="text" required placeholder="Digite seu bairro..." value="{{ $client->neighborhood}}" autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="city" class="animate__animated animate__bounceIn"><ion-icon name="business"></ion-icon>CIDADE:</label>
                         <input class="form-control" id="city" name="city" type="text" required placeholder="Digite sua cidade..." value="{{ $client->city}}" autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="uf" class="animate__animated animate__bounceIn"><ion-icon name="business"></ion-icon>ESTADO:</label>
                         <input class="form-control" id="uf" name="uf" type="text" required placeholder="Digite seu estado..." value="{{ $client->uf}}" autofocus>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col text-right buttons">
                            <a href="/" type="reset" class="btn btn-danger animate__animated animate__bounceIn"><ion-icon name="exit"></ion-icon>Cancelar</a>
                            <button type="reset" name="clear" class='btn btn-primary animate__animated animate__bounceIn'><ion-icon name="trash"></ion-icon>Limpar</button>
                            <button type="submit" class="btn btn-success animate__animated animate__bounceIn"><ion-icon name="cloud-done"></ion-icon>Confirmar</button>
                         </div>
                    </div>
                </form>

        </div>
    </div>
    </div>
    
 </section>
 @endsection