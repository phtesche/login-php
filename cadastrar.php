<?php 
session_start();
include("conexao.php");

$local = mysqli_real_escape_string($conexao, trim($_POST['local']));
$descricao = mysqli_real_escape_string($conexao, trim($_POST['desc']));
$latitude = mysqli_real_escape_string($conexao, trim($_POST['latitude']));
$longitude = mysqli_real_escape_string($conexao, trim($_POST['longitude']));

$sql = "select count(*) as total from local where nome_local = '$local' ";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1 ) {
    $_SESSION['local_cadastrado'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO local (nome_local, descricao_local, latitude, longetude) VALUES ('$local', '$descricao', '$latitude', '$longitude')";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>