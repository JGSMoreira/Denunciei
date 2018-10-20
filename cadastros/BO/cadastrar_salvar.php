<?php
include '../../conexao/conexao.php';

$nomev = $_POST ['nomevit'];
$sobrenomev = $_POST ['sobrenomevit'];
$idadev = $_POST ['idadevit'];
$enderecov = $_POST ['enderecovit'];
$telefonev = $_POST ['telefonevit'];
$profissaov = $_POST ['profissaovit'];
$nomes = $_POST ['nomesusp'];
$sobrenomes = $_POST ['sobrenomesusp'];
$idades = $_POST ['idadesusp'];
$enderecos = $_POST ['enderecosusp'];
$telefones = $_POST ['telefonesusp']; 
$datao = $_POST ['dataacon'];
$descricaoo = $_POST ['descricao'];
$assuntoo = $_POST ['motivo'];


// Criar código sql

$sql = "INSERT INTO bo (nomeVitima_bo,sobrenomeVitima_bo,idadeVitima_bo, enderecoVitima_bo, telefoneVitima_bo, profissaoVitima_bo,nomeSuspeito_bo, sobrenomeSuspeito_bo, idadeSuspeito_bo, enderecoSuspeito_bo, telefoneSuspeito_bo, dataOcorrido_bo, descricaoOcorrido_bo,assuntoOcorrido_bo) values (:nomev, :sobrenomev, :idadev, :enderecov, :telefonev, :profissaov, :nomes, :sobrenomes, :idades, :enderecos, :telefones, :datao, :descricaoo, :assuntoo)";

$inserir = $conn->prepare($sql);
$inserir-> bindParam (':nomev', $nomev);
$inserir-> bindParam (':sobrenomev', $sobrenomev);
$inserir-> bindParam (':idadev', $idadev);
$inserir-> bindParam (':enderecov', $enderecov);
$inserir-> bindParam (':telefonev', $telefonev);
$inserir-> bindParam (':profissaov', $profissaov);
$inserir-> bindParam (':nomes', $nomes);
$inserir-> bindParam (':sobrenomes', $sobrenomes);
$inserir-> bindParam (':idades', $idades);
$inserir-> bindParam (':enderecos', $enderecos);
$inserir-> bindParam (':telefones', $telefones);
$inserir-> bindParam (':datao', $datao);
$inserir-> bindParam (':descricaoo', $descricaoo);
$inserir-> bindParam (':assuntoo', $assuntoo);



$resultado = $inserir->execute();

if( ! $resultado)
{
  var_dump( $inserir->errorInfo() );
  exit;
}

header('location:sucesso.php');
 ?>
