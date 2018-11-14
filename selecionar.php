|<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "minhasdividas";

// criando a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);
// checar a conexão
if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}

// código SQL
$sql = "UPDATE `gastos` SET `id`=[value-1],`local`=[value-2],`data`=[value-3],`valor`=[value-4],`tipos`=[value-5],`reg_date`=[value-6] WHERE 1";

if (mysqli_query($conn, $sql)) {
    echo "Atualização realizado com sucesso";
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
