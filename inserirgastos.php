<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INSERIR GASTOS</title>

    <!-- Bootstrap core CSS-->
    <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/css/sb-admin.css" rel="stylesheet">
<style type="text/css">
            body{
                background-image:url(https://www.xmple.com/wallpaper/blue-grid-graph-paper-grey-1920x1080-c2-4682b4-778899-l2-1-5-a-15-f-20.svg);
                padding-top:50px;
                padding-right:25px;
                padding-left:25px;
                padding-bottom:50px;
            }
        </style>
  </head>

        <form role="form"  action="indexS.php" method="POST">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
          <div class="card-header"> <b> Insira seus gastos </b></div>
        <div class="card-body">
          
            <div class="form-group">
              <div class="form-group ls-login-user">
					<label>Local de Compra</label>
					<input class="form-control ls-login-bg-user input-lg" id="localcompra" type="text" name="local" placeholder="Local de Compra">
				</div>
            </div>
            <div class="form-group">
              <div class="form-group ls-login-password">
					<label>Data de Compra</label>
					<input class="form-control ls-login-bg-password input-lg" id="datacompra" type="date" name="data"  placeholder="Data de Compra">
                                </div>
            </div>
                        <div class="form-group">
              <div>
					<label>Valor da Compra</label>
					<input class="form-control ls-login-bg-password input-lg" id="valorcompra" type="number" name="valor"  placeholder="Valor da Compra">
                                </div>
            </div>
            <div class="form-group ls-login-password">
                <label>Tipos</label>
                <select class="custom-select d-block w-100" name="tipos" >
                    <option>Selecionar</option>
                    <option name="cartao">Cartão</option>
                    <option name="dinheiro">Dinheiro</option>
                </select>
                <br>
              <div class="form-group">
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block ">Enviar</button>
          
          
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