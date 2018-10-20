<?php
include '../../conexao/conexao.php';
$titulo = $_POST['titulo'];
$suspeito = $_POST['suspeito'];
$data = $_POST['data'];
$motivo = $_POST['motivo'];
$descricao = $_POST['descricao'];
$email = $_POST['email'];

// Criar código sql

$sql = "INSERT INTO denuncia (titulo_den, suspeito_den, data_den, motivo_den, descricao_den, email_den) values (:titulo, :suspeito, :data, :motivo, :descricao, :email)";

$inserir = $conn->prepare($sql);
$inserir-> bindParam (':titulo', $titulo);
$inserir-> bindParam (':suspeito', $suspeito);
$inserir-> bindParam (':data', $data);
$inserir-> bindParam (':motivo', $motivo);
$inserir-> bindParam (':descricao', $descricao);
$inserir-> bindParam (':email', $email);

$resultado = $inserir->execute();

if( ! $resultado)
{
  var_dump( $inserir->errorInfo() );
  exit;
}

header('location:sucesso.php');


 ?>

 
