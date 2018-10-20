<?php
include '../../conexao/conexao.php';
$id = $_GET['id'];
$nome_user = $_POST['nome'];
$email_user = $_POST['email'];
$pass_user = $_POST['senha'];
$pass_user_c = $_POST['confirm-senha'];

if ($pass_user==$pass_user_c) {
  $sql = "UPDATE user SET nome_user = :nome, email_user = :email, pass_user = :senha WHERE cod_user = :id";

  $inserir = $conn->prepare($sql);
  $inserir->bindParam (":nome", $nome_user);
  $inserir->bindParam (":email", $email_user);
  $inserir->bindParam (":senha", $pass_user);
  $inserir->bindParam (":id", $id);

  $resultado = $inserir->execute();

  if( ! $resultado){
    var_dump( $inserir->errorInfo() );
    exit;
    header('location:falha.php');
  }
  header('location:sucesso.php');
}
else{
  header('location:falha.php');
}
?>
