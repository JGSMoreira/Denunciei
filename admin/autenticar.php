<?php
session_start();

if (empty($_POST["user"]) || empty($_POST["senha"] )) {
  header ('location:../login/login.php?error=Usuário e/ou senha vazios');
}else{
  $usuario = $_POST["user"];
  $senha = $_POST["senha"];
  include('../conexao/conexao.php');


// buscar no BD os dados
$sql= "SELECT * FROM usuario where username_use =:user and senha_use=:senha";
$consulta = $conn->prepare($sql);
$consulta->bindParam(':user', $usuario);
$consulta->bindParam(':senha', $senha);
$consulta->execute();
$registro = $consulta->fetch(PDO::FETCH_OBJ);


  if ($usuario==$registro->username_use && $senha==$registro->senha_use) {
    $_SESSION["logado"]=true;

    $_SESSION["usuario_nome"] = $registro->username_use;
    header ('location:../admin/admin.php');
  }else {
    header ('location:../login/login.php?error=Usuário e/ou senha errados');
  }
}
