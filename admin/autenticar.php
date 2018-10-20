<?php
session_start();

if (empty($_POST["user"]) || empty($_POST["senha"] )) {
  header ('location:../log/login.php?error=Usuário e/ou senha vazio(s)');
}
else{
  $usuario = $_POST["user"];
  $senha = $_POST["senha"];
  include('../conexao/conexao.php');

  // buscar no BD os dados
  $sql= "SELECT * FROM user where email_user = :user and pass_user = :senha";
  $consulta = $conn->prepare($sql);
  $consulta->bindParam(':user', $usuario);
  $consulta->bindParam(':senha', $senha);
  $consulta->execute();
  $registro = $consulta->fetch(PDO::FETCH_OBJ);


  if ($usuario == $registro->nome_user && $senha == $registro->pass_user) {
    $_SESSION["logado"] = true;
    $_SESSION["usuario_nome"] = $registro->nome_user;

    header ('location:../admin/index.php');
  }
  else {
    header ('location:../log/login.php?error=Usuário e/ou senha inválido(s)');
  }
}
