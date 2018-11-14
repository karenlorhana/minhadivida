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
    <center>
      
    
    <?php
    include "autenticacaoBD.php";
    include "contagem.php";
    echo "<br>";

    $sql = "SELECT `id`, `local`, `data`, `valor`, `tipos`, `reg_date` FROM `gastos`";
    $result = mysqli_query($conn, $sql);


    echo "<table class='table table-striped bg-light'>
  <thead>
    <tr>
    <th scope='col'>Id</th>
      <th scope='col'>Local de Compra</th>
      <th scope='col'>Data</th>
      <th scope='col'>Valor</th>
      <th scope='col'>Tipo</th>
      
    </tr>
  </thead>";

    echo "<a href='editar.php'> <button  style=' margin-left: 1100px; margin-right: 15px;' type='button' class='btn btn-dark'>Editar</button></a>";
    echo "<a href='excluir.php'><button type='button' class='btn btn-dark'> Apagar</button></a>";

        
       
 $dinheiro = 0;
 $cartao = 0;
 
// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
    if (mysqli_num_rows($result) > 0) {
        // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["tipos"] == "Dinheiro"){
                $dinheiro += $row["valor"];
            } else {
                $cartao += $row["valor"];
            }
//A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
            echo "<tbody>
        <tr>
       <th>" . $row["id"] . "</th>
      <th>" . $row["local"] . "</th>
      <td>" . $row["data"] . "</td>
      <td>" . $row["valor"] . "</td>
      <td>" . $row["tipos"] . "</td>
          
    </tr>
  </tbody>";
            
        }
    } else {
        
        echo "A tabela gastos está vazia";
    }

    
    echo "<br>";
    echo "<th></th>";
    echo "<th></th>";echo "<th></th>";
    echo "<th scope='col'>Total gasto</th>";
    echo " <td>$total</td>";
    
  
   
    
    
    echo "</table>";
    ?>
    </center>
</html>
