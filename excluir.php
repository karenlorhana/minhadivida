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
    
    <br>
    <br>
  <form role="form"  action="excluirS.php" method="POST" name='formulario'>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
          <div class="card-header"> <b> Digite o ID da compra que quer excluir </b></div>
        <div class="card-body">
          
            <div class="form-group">
              <div class="form-group ls-login-user">
					<label for="userLogin">ID</label>
					<input class="form-control ls-login-bg-user input-lg" id="userLogin" type="text" name="id" placeholder="ID">
				</div>
            </div>
            
              <div class="form-group">
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block ">Excluir</button>
          
          
        </div>
      </div>
    </div>
</form>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>