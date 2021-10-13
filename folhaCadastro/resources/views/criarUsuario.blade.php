@extends('layouts.main')

@section('title', 'Criar Usuário')

@section('content')
 <section class="container animate__animated animate__fadeIn">
    
    <div class="box">
        <div class="box-header">
            <div class="box-title">
                <h2 class="text-center animate__animated animate__bounceIn"><ion-icon name="clipboard"></ion-icon>Cadastrar Usuário</h2>
            </div>
            <hr size="3" width="65%" class="linha animate__animated animate__bounceIn">
            <div class="box-body">
                <form action="/criarUsuario" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="img" class="animate__animated animate__bounceIn"><ion-icon name="images"></ion-icon>IMAGEM:</label>
                        <input type="file" id="img" name='img' class='form-control-file'>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                         <label for="name" class="animate__animated animate__bounceIn"><ion-icon name="information-circle"></ion-icon>PRIMEIRO NOME:</label>
                         <input class="form-control" id="name" name="name" type="name" required placeholder="Digite seu primeiro nome..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="sobrenome" class="animate__animated animate__bounceIn"><ion-icon name="information-circle"></ion-icon>SOBRENOME:</label>
                         <input class="form-control" id="surname" name="surname" type="name" required placeholder="Digite seu sobrenome..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="email" class="animate__animated animate__bounceIn"><ion-icon name="at"></ion-icon>EMAIL:</label>
                         <input class="form-control" id="email" name="email" type="email" required placeholder="Digite aqui seu email..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="phone" class="animate__animated animate__bounceIn"><ion-icon name="phone-portrait"></ion-icon>TELEFONE:</label>
                         <input class="form-control" id="cell" name="cell" type="phone" required placeholder="Digite seu telefone..." autofocus>
                        </div>
                        <div class="col-md-12">
                            <label for="text" class="animate__animated animate__bounceIn">UM POUCO SOBRE VOCÊ:</label>
                            <input class="form-control" id="text" name="text" type="text" placeholder="Digite uma mensagem legal..." autofocus>
                           </div>
                        <div class="col-md-12">
                        <label for="gender" class="animate__animated animate__bounceIn"><ion-icon name="male"></ion-icon>GENERO:<ion-icon name="female"></ion-icon></label>
                         <select name="gender" id="gender" class="form-control" required autofocus>
                            <option value="0">Masculino</option>
                            <option value="1">Feminino</option>
                            <option value="2">Prefiro não informar</option>
                         </select>
                        </div>
                        <div class="col-md-4">
                         <label for="cep" class="animate__animated animate__bounceIn"><ion-icon name="business"></ion-icon>CEP:</label>
                         <input class="form-control" id="cep" name="cep" type="integer" onblur="pesquisacep(this.value);" required placeholder="00.000-000..." autofocus>
                        </div>
                        <div class="col-md-4">
                         <label for="adress" class="animate__animated animate__bounceIn"><ion-icon name="business"></ion-icon>RUA:</label>
                         <input class="form-control" id="adress" name="adress" type="adress" required placeholder="Digite sua rua..." autofocus>
                        </div>
                        <div class="col-md-4">
                         <label for="neighborhood" class="animate__animated animate__bounceIn"><ion-icon name="business"></ion-icon>BAIRRO:</label>
                         <input class="form-control" id="neighborhood" name="neighborhood" type="adress" required placeholder="Digite seu bairro..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="city" class="animate__animated animate__bounceIn"><ion-icon name="business"></ion-icon>CIDADE:</label>
                         <input class="form-control" id="city" name="city" type="adress" required placeholder="Digite sua cidade..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="uf" class="animate__animated animate__bounceIn"><ion-icon name="business"></ion-icon>ESTADO:</label>
                         <input class="form-control" id="uf" name="uf" type="adress" required placeholder="Digite seu estado..." autofocus>
                        </div>
                        
                    </div>
                    <div class="row" id="buttons">
                        <div class="col text-right">
                            <a href="index.php" type="reset" class="btn btn-danger animate__animated animate__bounceIn"><ion-icon name="exit"></ion-icon>Cancelar</a>
                            <button type="reset" name="clear" class='btn btn-primary animate__animated animate__bounceIn'><ion-icon name="trash"></ion-icon>Limpar</button>
                            <button type="submit" name='confirm' class="btn btn-success animate__animated animate__bounceIn"><ion-icon name="cloud-done"></ion-icon>Confirmar</button>
                         </div>
                    </div>
                </form>

        </div>
    </div>
    </div>
    
 </section>
 @endsection