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
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                         <label for="name">PRIMEIRO NOME:</label>
                         <input class="form-control" id="name" name="name" type="text" required placeholder="Digite seu primeiro nome..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="sobrenome">SOBRENOME:</label>
                         <input class="form-control" id="sobrenome" name="sobrenome" type="text" required placeholder="Digite seu sobrenome..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="email">EMAIL:</label>
                         <input class="form-control" id="email" name="email" type="email" required placeholder="Digite aqui seu email..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="phone">TELEFONE:</label>
                         <input class="form-control" id="phone" name="phone" type="tel" required placeholder="Digite seu telefone..." autofocus>
                        </div>
                        <div class="col-md-12">
                        <label for="gender">GENERO:</label>
                           <table>
                            <tr>
                         <td>Masculino</td> 
                         <td>   |  </td>
                         <td>Feminino</td>
                         </tr>
                         <tr>
                             <td><input class="form-control" id="m" name="gender" type="radio" autofocus value="m"></td>
                             <td>  |  </td>
                             <td> <input class="form-control" id="f" name="gender" type="radio" autofocus value="f"></td>
                         </tr>
                           </table>
                        </div>
                        <div class="col-md-4">
                         <label for="cep">CEP:</label>
                         <input class="form-control" id="cep" name="cep" type="search" required placeholder="Digite seu cep..." autofocus>
                        </div>
                        <div class="col-md-4">
                         <label for="adress">RUA:</label>
                         <input class="form-control" id="adress" name="adress" type="" required placeholder="Digite sua rua..." autofocus>
                        </div>
                        <div class="col-md-4">
                         <label for="neighborhood">BAIRRO:</label>
                         <input class="form-control" id="neighborhood" name="neighborhood" type="" required placeholder="Digite seu bairro..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="city">CIDADE:</label>
                         <input class="form-control" id="city" name="city" type="" required placeholder="Digite sua cidade..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="uf">ESTADO:</label>
                         <input class="form-control" id="uf" name="uf" type="" required placeholder="Digite seu estado..." autofocus>
                        </div>
                       
                    </div>
                    <div class="row" id="buttons">
                        <div class="col text-right">
                            <a href="index.php" type="reset" class="btn btn-danger">Cancelar</a>
                            <button type="reset" name="reset" class='btn btn-alert'>Limpar</button>
                            <button type="submit" name='confirm' class="btn btn-sucess">Confirmar</button>
                         </div>
                    </div>
                </form>

        </div>
    </div>
    </div>
    
 </section>
 @endsection