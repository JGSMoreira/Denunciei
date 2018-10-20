<?php
include '../conexao/conexao.php';
$cod_user= $_POST['cod_user'];
$nome_user= $_POST['username'];
$pass_user= $_POST['password'];
$pass_confirm= $_POST['confirm-password'];

// Criar código sql
if ($pass_user==$pass_confirm) {
  // code...
$sql = "UPDATE user SET nome_user =:nome, pass_user = :pass where cod_user = :cod_user;";

$update = $conn->prepare($sql);
$update-> bindParam (':cod_user', $cod_user);
$update-> bindParam (':pass', $pass_user);

$resultado = $update->execute();

if( ! $resultado)
{
  var_dump( $update->errorInfo() );
  exit;
}

echo $update->rowCount(). "linha";}
  header ('location:consulta.php');
 ?>
