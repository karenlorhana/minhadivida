<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "minhasdividas";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("A conexãoo falhou: " . mysqli_connect_error());
}

// código SQL
//$_POST['formulario'];
$id = $_POST['id'];
$sql = "DELETE FROM gastos WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Dado deletado com sucesso";
} else {
    echo "Erro ao deletar o dado: " . mysqli_error($conn);
}

mysqli_close($conn);
?>