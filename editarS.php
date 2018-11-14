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
$local =$_POST['local'];
$data =$_POST['data'];
$valor =$_POST['valor'];
$tipos =$_POST['tipos'];
$sql = "UPDATE FROM gastos WHERE id=$id, local=$local, data=$data, valor=$valor, tipos=$tipos";


if (mysqli_query($conn, $sql)) {
    echo "Dado deletado com sucesso";
} else {
    echo "Erro ao deletar o dado: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
