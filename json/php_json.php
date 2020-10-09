<?php
//string json contendo os dados de um funcionário
$json_str = '{"idSensor":10003001,"tipo_Dado":"contador","dado":"1","grandeza":"peca", "nome_local":"injecao" }';

//faz o parsing na string, gerando um objeto PHP
$obj = json_decode($json_str);

//imprime o conteúdo do objeto
echo "idSensor: $obj->idSensor <br>";
echo "tipo dado: $obj->tipo_Dado <br>";
echo "dado: $obj->dado<br>";
echo "grandeza: $obj->grandeza<br>";
echo "nome local $obj->nome_local<br>";

?>