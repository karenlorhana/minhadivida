<?php 
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "minhasdividas";

// Criando a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificando a conexão com o banco  de dados
if (!$conn) {
    die("A conexão com o BD falhou: " . mysqli_connect_error());
}
?>
