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
    <br> <br>
    <center>
<?php
// incluindo a autenticacao
include "autenticacaoBD.php";

// Coletar os dados digitados pelo usuario
$local = $_POST['local'];
$data = $_POST['data'];
$valor = $_POST['valor'];
$tipos = $_POST['tipos'];


// código SQL
$sql = "INSERT INTO gastos(local, data, valor, tipos)VALUES ('$local', '$data', '$valor', '$tipos')"; 

// Executando o código SQL
if (mysqli_query($conn, $sql)) {
    echo "Compra cadastrada com sucesso! <br>";
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}
// Fechando a conexão com o banco de dados
mysqli_close($conn);

echo "<a href='index.php'>Clique aqui para realizar um novo registro</a><br>";
echo "<a href='index.php'>Clique aqui para exibir os gastos</a><br>";

?>
    </center>
