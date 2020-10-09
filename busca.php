<?php 
session_start();
include("conexao.php");

$_POST['busca'];
$result_busca = "SELECT * FROM local WHERE nome_local LIKE '%$busca%'
LIMIT 5";

    $result_busca = mysqli_query($conn, $result_busca);

    while($rows_busca = mysqli_fetch_array($result_busca))
    {
        echo "Resultado de Busca: ".$rows_busca['nome_local']."<br>";

    }
    ?>
