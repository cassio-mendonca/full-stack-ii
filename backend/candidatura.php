<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cargo = $_POST['cargo'];
$experiencia = $_POST['experiencia'];


$sql = "insert into candidatura(nome, email, telefone, cargo, experiencia) values('$nome','$email','$telefone','$cargo','$experiencia')";

mysqli_query($conn, $sql);

echo "curriculo enviado!";
?>
