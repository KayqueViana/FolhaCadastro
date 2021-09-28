@extends('layouts.main')

@section('title', 'Criar Usuário')

@section('content')
 <section class="container">
    
    <div class="box">
        <div class="box-header">
            <div class="box-title">
                <h2 class="text-center"><i class="fa fa-list"></i>Cadastrar Usuario</h2>
            </div>
            <hr size="3" width="65%">
            <div class="box-body">
                <form action="/criarUsuario" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                         <label for="name">PRIMEIRO NOME:</label>
                         <input class="form-control" id="name" name="name" type="text" required placeholder="Digite seu primeiro nome..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="sobrenome">SOBRENOME:</label>
                         <input class="form-control" id="surname" name="surname" type="text" required placeholder="Digite seu sobrenome..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="email">EMAIL:</label>
                         <input class="form-control" id="email" name="email" type="email" required placeholder="Digite aqui seu email..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="phone">TELEFONE:</label>
                         <input class="form-control" id="cell" name="cell" type="tel" required placeholder="Digite seu telefone..." autofocus>
                        </div>
                        <div class="col-md-12">
                            <label for="text">UM POUCO SOBRE VOCÊ:</label>
                            <input class="form-control" id="text" name="text" type="textarea" placeholder="Digite uma mensagem legal..." autofocus>
                           </div>
                        <div class="col-md-12">
                        <label for="gender">GENERO:</label>
                         <select name="gender" id="gender" class="form-control" required autofocus>
                            <option value="0">Masculino</option>
                            <option value="1">Feminino</option>
                            <option value="2">Prefiro não informar</option>
                         </select>
                        </div>
                        <div class="col-md-4">
                         <label for="cep">CEP:</label>
                         <input class="form-control" id="cep" name="cep" type="text" onblur="pesquisacep(this.value);" required placeholder="00.000-000..." autofocus>
                        </div>
                        <div class="col-md-4">
                         <label for="adress">RUA:</label>
                         <input class="form-control" id="adress" name="adress" type="text" required placeholder="Digite sua rua..." autofocus>
                        </div>
                        <div class="col-md-4">
                         <label for="neighborhood">BAIRRO:</label>
                         <input class="form-control" id="neighborhood" name="neighborhood" type="text" required placeholder="Digite seu bairro..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="city">CIDADE:</label>
                         <input class="form-control" id="city" name="city" type="text" required placeholder="Digite sua cidade..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="uf">ESTADO:</label>
                         <input class="form-control" id="uf" name="uf" type="text" required placeholder="Digite seu estado..." autofocus>
                        </div>
                        
                    </div>
                    <div class="row" id="buttons">
                        <div class="col text-right">
                            <a href="index.php" type="reset" class="btn btn-danger">Cancelar</a>
                            <button type="reset" name="clear" class='btn btn-primary'>Limpar</button>
                            <button type="submit" name='confirm' class="btn btn-success">Confirmar</button>
                         </div>
                    </div>
                </form>

        </div>
    </div>
    </div>
    
 </section>
 @endsection