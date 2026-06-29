<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$servico = $_POST['servico'];
$mensagem = $_POST['mensagem'];

$sql = "insert into contato(nome, email, telefone, servico, mensagem) values('$nome','$email','$telefone','$servico','$mensagem')";

mysqli_query($conn, $sql);

echo "mensagem enviada!";
?>
