<?php
include '../conexao/conexao.php';

$nome_user = $_POST['nome'];
$email_user = $_POST['email'];
$pass_user = $_POST['senha'];
$pass_user_c = $_POST['confirm-senha'];

if ($pass_user==$pass_user_c) {
  $sql = "INSERT INTO user VALUES (null, :nome, :email,:senha)";

  $inserir = $conn->prepare($sql);
  $inserir->bindParam (":nome", $nome_user);
  $inserir->bindParam (":email", $email_user);
  $inserir->bindParam (":senha", $pass_user);

  $resultado = $inserir->execute();

  if( ! $resultado){
    var_dump( $inserir->errorInfo() );
    exit;
  }

  echo $inserir->rowCount(). "linhas";
}
header('location:sucesso.php');
?>
