<?php 
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario' ";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1 ) {
    $_SESSION['usuario'] = true;
    header('Location: cad_user.php');
    exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha) VALUES ('$nome', '$usuario', '$senha')";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: painel.php');
exit;
?>