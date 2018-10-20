<?php
include '../conexao/conexao.php';
if (empty($_GET['id'])) {
  header('location:consulta.php');
}else{
$id = filter_var($_GET['id']);
/* criar codigo sql */
$sql = "DELETE FROM user WHERE cod_user = :id;";

$delete= $conn->prepare($sql);
$delete->bindParam(':id',$id);

$resultado = $delete->execute();
if (! $resultado) {
  var_dump($delete->errorInfo());
  exit;
}
echo $delete->rowCount(). " linha";
header('Location:consulta.php');
}
