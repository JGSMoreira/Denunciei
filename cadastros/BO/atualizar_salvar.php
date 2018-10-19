<?php
include '../conexao/conexao.php';
$id= $_POST['cod_pes'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

// Criar código sql

$sql = "UPDATE pessoa SET nome_pes =:nome, sobrenome_pes = :sobrenome, email_pes = :email, idade_pes = :idade where cod_pes = :id;";

$update = $conn->prepare($sql);
$update-> bindParam (':id', $id);
$update-> bindParam (':nome', $nome);
$update-> bindParam (':sobrenome', $sobrenome);
$update-> bindParam (':email', $email);
$update-> bindParam (':idade', $idade);

$resultado = $update->execute();

if( ! $resultado)
{
  var_dump( $update->errorInfo() );
  exit;
}

echo $update->rowCount(). "linha";
  header ('location:consulta.php');
 ?>
