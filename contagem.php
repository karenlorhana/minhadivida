<?php
// incluindo a autenticacao
include "autenticacaoBD.php";

// Selecionar os dados dos administradores salvo no banco de dados
$sql = "SELECT `id`, `local`, `data`, `valor`, `tipos`, `reg_date` FROM `gastos` WHERE 1";
$result = mysqli_query($conn, $sql);

// contadores para cada tipo de curso
$gasto = 0;





if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while ($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        if ($row['valor']) {
            $gasto += $row['valor'];
        } 
       
    }
    $total =  $gasto;
}

?>