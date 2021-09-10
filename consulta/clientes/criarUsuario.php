 <section class="container">
    <div class="box">
        <div class="box-header">
            <div class="box-title">
                <h2 class="text-center">Cadastrar Usuario</h2>
            </div><hr/>
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
                         <input class="form-control" id="m" name="m" type="radio" required autofocus>
                         <label for="m">Masculino</label>
                         <input class="form-control" id="f" name="f" type="radio" required autofocus>
                         <label for="f">Feminino</label>
                        </div>
                        <div class="col-md-4">
                         <label for="cep">CEP:</label>
                         <input class="form-control" id="cep" name="cep" type="cep" required placeholder="Digite seu telefone..." autofocus>
                        </div>
                        <div class="col-md-4">
                         <label for="adress">RUA:</label>
                         <input class="form-control" id="adress" name="adress" type="" required placeholder="Digite seu telefone..." autofocus>
                        </div>
                        <div class="col-md-4">
                         <label for="neighborhood">BAIRRO:</label>
                         <input class="form-control" id="neighborhood" name="neighborhood" type="" required placeholder="Digite seu telefone..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="city">CIDADE:</label>
                         <input class="form-control" id="city" name="city" type="" required placeholder="Digite seu telefone..." autofocus>
                        </div>
                        <div class="col-md-12">
                         <label for="uf">ESTADO:</label>
                         <input class="form-control" id="uf" name="uf" type="" required placeholder="Digite seu telefone..." autofocus>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col text-right">
                            <a href="index.php" type="reset" class="btn btn-danger">Cancelar</a>
                            <button type="submit" name='confirm' class="btn btn-sucess">Confirmar</button>
                         </div>
                </form>

            </div>
        </div>
    </div>
    
 </section>