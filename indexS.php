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

