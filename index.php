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
                background-image:url(https://www.xmple.com/wallpaper/blue-grid-graph-paper-grey-1920x1080-c2-4682b4-778899-l2-1-5-a-15-f-20.svg);
                padding-top:100px;
                padding-right:25px;
                padding-left:25px;
                padding-bottom:50px;
            }
        </style>
  </head>

  <?php

include "autenticacaoBD.php";

echo "<h4>gastos totais:</h4>";

$sql = "SELECT `id`, `local`, `data`, `valor`, `tipos`, `reg_date` FROM `gastos`";
$result = mysqli_query($conn, $sql);


echo "<table class='table table-striped bg-light'>
  <thead>
    <tr>
      <th scope='col'>Local de Compra</th>
      <th scope='col'>Data</th>
      <th scope='col'>Valor</th>
      <th scope='col'>Tipo</th>
    </tr>
  </thead>";

echo "<form action='editar.php'><button style=' margin-left: 1100px; margin-right: 15px;' type='button' class='btn btn-dark'>Editar</button>";
echo "<button type='button' class='btn btn-dark'> Apagar</button>";

// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while ($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        echo "<tbody>
        <tr>
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
echo "</table>";
?>
</html>
