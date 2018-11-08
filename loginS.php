<?php
// incluindo a autenticacao
include "autenticacaoBD.php";

// Selecionar as variaveisa
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT id, email, senha FROM administrador";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        if($row['email'] == $_POST['email'] and $row['senha'] == $_POST['senha']){
            include "index.php";
 
        }
    }
}

mysqli_close($conn);

?>
