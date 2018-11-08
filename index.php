<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <a href="http://localhost/minhasdividas/inserirgastos.php"><input type="button" value="inserir gastos"></a>
    </body>
    <?php
// incluindo a autenticacao
include "autenticacaoBD.php";

echo "<h4>gastos totais:</h4>";

$sql = "SELECT `id`, `local`, `data`, `valor`, `tipos`, `reg_date` FROM `gastos`";
$result = mysqli_query($conn, $sql);

echo "<table border=1>
                   <table border=1>
                   <tr>
                   <th>local de compra</th>
                   <th>data</th>
                   <th>valor</th>
                   <th>tipo</th>
                   </tr>";


// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while ($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        echo "<tr>
                      <td> " . $row["local"] . "</td>
                      <td> " . $row["data"] . "</td>     
                      <td> " . $row["valor"] . "</td> 
                      <td> " . $row["tipos"] . "</td>
                      <td><button type=\"submit\" name=\"apagar\">apagar</button></td>
                      <td><button type=\"submit\" name=\"editar\">editar</button></td>
                       
                      </tr>
                      ";
    }
} else {
    echo "A tabela gastos está vazia";
}
echo "</table>";
?>
</html>
