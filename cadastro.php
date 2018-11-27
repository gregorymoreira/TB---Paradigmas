<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Banco de Sangue - Doe sangue, salve vidas</title>
    <link rel="icon" href="imagens/índice.jpeg">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente"> 
      <div class="container">
        
        <!-- header -->
        <div class="navbar-header">

          <!--botao toggle-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">alternar navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a href="index.php" class="navbar-brand">
            <span class="img-logo">Banco de Sangue</span>
          </a>
        </div>

        <!--navbar-->
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Consulte</a></li>
            <li><a href="">Agende</a></li>
            <li class="divisor" role="separator"><a></a></li>
            <li><a href="cadastro.php">Cadastre-se</a></li>
            <li><a href="login.php">Entrar</a></li>
          </ul>
        </div>


      </div><!--container-->
    </nav><!--nav-->

    
    <div class="capa">
      <div class="texto-capa">
        <h1>Cadastre-se já. É grátis.</h1>
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <form method="post" action="registra_usuario.php" id="formCadastrarse">
          <div class="form-group">
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required="requiored">
          </div>
          <br />
          <div class="form-group">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">
          </div>
          <br />
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
          </div>
          <br />
          <div class="form-group">
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
          </div>
          <br />
          <div class="form-group">
            <input type="text" class="form-control" id="sangue" name="sangue" placeholder="Tipo Sanguíneo" required="requiored">
          </div>
          <br />
          <button type="submit" class="btn btn-primary">Cadastrar-se</button>
        </div>
      </div>
    </div>

    <!--rodape-->
    <footer id="rodape">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <span class="img-logo">Banco de Sangue</span>
          </div>
          <div class="col-md-10">
            <ul class="nav">
              <li class="item-rede-social"><a href="https://www.facebook.com/"><img src="imagens/facebook.png"></a></li>
              <li class="item-rede-social"><a href="https://twitter.com"><img src="imagens/twitter.png"></a></li>
              <li class="item-rede-social"><a href="https://www.instagram.com/"><img src="imagens/instagram.png"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>