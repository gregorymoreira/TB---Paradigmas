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
        <h1>Doe sangue. Salve vidas.</h1>
        <a href="" class="btn btn-custom btn-roxo btn-lg">Agende sua doação</a>
        <a href="login.php" class="btn btn-custom btn-branco btn-lg">Acesse sua conta</a>
      </div>
    </div>

    <!-- sessao -->
    <section id="servicos">
      <div class="container">
        
        <div class="row">
          <!--fotos -->
          <div class="col-md-6">
            
            <div class="row fotos">
              
              <div class="col-md-6">
                <img src="imagens/img1.jpg" class="img-responsive">
              </div>
              <div class="col-md-6">
                <img src="imagens/img2.png" class="img-responsive">
              </div>

            </div><!--row-->

            <div class="row fotos">
              
              <div class="col-md-6">
                <img src="imagens/img3.jpg" class="img-responsive">
              </div>
              <div class="col-md-6">
                <img src="imagens/img5.png" class="img-responsive">
              </div>

            </div><!--row-->
          
          </div>
          <!--descr -->
          <div class="col-md-6">
            <h2>O que oferecemos?</h2>

            <h3>Consulte</h3>
            <p>Consulte através do nosso sistema e veja com detalhe o estoque do banco de sangue dos hospitais mais perto de você.
            </p>

            <h3>Agende</h3>
            <p>Agente sua doação conosco e ajude a salvar vidas.</p>

            <h3>Cadastre-se</h3>
            <p>Abra uma conta na nossa plataforma para poder consultar seu histórico de doação, agendar com mais facilidade e ficar por dentro das últimas informações sobre o banco de sangue da nossa cidade.</p>

          </div>
          
        </div>

      </div>
    </section>

    <!--recursos-->
    <section id="recursos">
      <div class="container">
        <div class="row">
          <!--recursos-->
          <div class="col-md-4">
            <h2>Objetivos</h2>

            <h3>Missão</h3>
            <p>Esse projeto foi desenvolvido para a disciplina de Paragimas de Programação, do curso Bacharelado em Ciência da Computação do Instituto Federal de Educação, Ciência e Tecnlogia de Brasília, campus Taguatinga. O professor orientador foi Roberto Fontes e os alunos envolvidos são Gregory Henrique, Jerônimo Hermano e Matheus de Azevedo.</p>

            <h3>Design responsivo</h3>
            <p>
              Nosso projeto conta com um design responsivo, para que você possa estar acessando através dos mais diversos meios.
            </p>

            <h3>Paradigmas</h3>
            <p>
              O paradigma declarativo é baseado no lógico e funcional. Linguagens declarativas descrevem o que fazem e não exatamente como suas instruções funcionam. Linguagens de marcação são o melhor exemplo: HTML, XML. Não obstante, o próprio Prolog – reconhecido primariamente pelo paradigma lógico – também é uma linguagem declarativa.
            </p>
          </div>
          <div class="col-md-8">
            <img src="imagens/resposivo.png" class="img-responsive">
          </div>
        </div>
      </div>
    </section>

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