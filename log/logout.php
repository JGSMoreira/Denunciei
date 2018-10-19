<?php
$titulo = "Logout";
include '../conexao/conexao.php';
if(empty($_GET['id'])){
  header ('location:../index.php');
}else{
  $id = filter_var ($_GET['id']);
  $sql = "SELECT * FROM pessoa where cod_pes =:id";
  $consulta = $conn->prepare($sql);
  $consulta->bindParam(':id', $id);
  $consulta->execute();
  $registro = $consulta->fetch(PDO::FETCH_OBJ);


}
