<!doctype html>
<html lang="pt-br">
    <head>
        <link rel="shortcut icon" href="/img/Register.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!--CSS Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Fonte Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fonte do Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&display=swap" rel="stylesheet">
        <!--Javascript da aplicação-->
        <link rel="stylesheet" href="/css/style.css">
        <script type="text/javascript" src="/js/consulta_end.js"></script>
        <script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type='text/javascript' src="/js/jquery.mask.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){         
                $("#cell").mask("(00) 00000-0009")
                $("#cep").mask("00.000-000")
            })
        </script>
    </head>
    <body>
        
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                     <img src="/img/R.png" alt="Cadastro">
                    </a>
                        <ul class="navbar-nav">
                            <li class="nav-item"></li>
                            <li class="nav-item">
                                <a href="/criarUsuario" class="nav-link">Cadastrar Usuário</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Lista de Usuários</a>
                            </li>
                        </ul>
                </div>
            </nav>
        </header>
      
            <main>
                    @if(session('msg'))
                     <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
            </main>
         
    <div id="copy">
        <footer>
         <p>Folha de Cadastro &copy; 2021 - Kayque Viana</p>
        </footer>
    </div>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>