
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN</title>

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
  <form role="form"  action="loginS.php" method="POST">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
          <div class="card-header"> <b> Acesse sua conta </b></div>
        <div class="card-body">
          
            <div class="form-group">
              <div class="form-group ls-login-user">
					<label for="userLogin">Email</label>
					<input class="form-control ls-login-bg-user input-lg" id="userLogin" type="text" name="email" placeholder="Email">
				</div>
            </div>
            <div class="form-group">
              <div class="form-group ls-login-password">
					<label for="userPassword">Senha</label>
					<input class="form-control ls-login-bg-password input-lg" id="userPassword" type="password" name="senha"  placeholder="Senha">
                                </div>
            </div>
            
              <div class="form-group">
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block ">Entrar</button>
          
          
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