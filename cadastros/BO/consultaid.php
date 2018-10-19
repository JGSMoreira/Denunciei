<?php
include('../conexao/conexao.php');
$titulo = "AJJAJ";

$sql = "SELECT * FROM user;";
$consulta = $conn->prepare($sql);
$consulta->execute();

$registros = $consulta->fetchAll(PDO:: FETCH_OBJ);
 ?>
