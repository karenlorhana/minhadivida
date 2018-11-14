<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PÁGINA INICIAL</title>

        <!-- Bootstrap core CSS-->
        <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/css/sb-admin.css" rel="stylesheet">
        <style type="text/css">
            body{
               background-color:#DCDCDC;
               padding-top:0px;
               padding-bottom:50px;
            }
            center{
                padding-right:25px;
                padding-left:25px;
                
            }
         

        </style>
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="inicio.php">Início</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="inserirgastos.php">Cadastrar<span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown">
                <li class="nav-item">
                    <a class="nav-link" href="relatorio.php">Relatório</a>
                </li>
               <li class="nav-item">
                    <a class="nav-link" href="index.php">Exibir Registros Totais</a>
                </li>

            </ul>
        </div>
    </nav>
    
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Relatório de Compras</h1>
      <p class="lead">Selecione abaixo o que você deseja visualizar:</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Gastos no Cartão</h4>
          </div>
          <div class="card-body">
           
            <ul class="list-unstyled mt-3 mb-4">
              <li>Local de Compra</li>
              <li>Data</li>
              <li>Valor</li>
              <li>Soma dos Gastos</li>
            </ul>
            <a href="cartao.php"><button type="button" class="btn btn-lg btn-block btn-primary">Exibir</button></a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Gastos em Dinheiro</h4>
          </div>
          <div class="card-body">
           
            <ul class="list-unstyled mt-3 mb-4">
              <li>Local de Compra</li>
              <li>Data</li>
              <li>Valor</li>
              <li>Soma dos Gastos</li>
            </ul>
            <a href="dinheiro.php"><button type="button" class="btn btn-lg btn-block btn-primary">Exibir</button></a>
          </div>
        </div>
        
      </div>