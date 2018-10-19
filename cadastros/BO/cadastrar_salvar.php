<?php
include '../conexao/conexao.php';
if(empty($_GET['id'])){
  header ('location.consultarid.php');
}else{
  $id = filter_var ($_GET['id']);
  $sql = "SELECT * FROM user where cod_user =:id";
  $consulta = $conn->prepare($sql);
  $consulta->bindParam(':id', $id);
  $consulta->execute();
  $registro = $consulta->fetch(PDO::FETCH_OBJ);
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
$id = $_POST [':id'];

// Criar código sql

$sql = "INSERT INTO bo (nomeVitima_bo,sobrenomeVitima_bo,idadeVitima_bo, enderecoVitima_bo, telefoneVitima_bo, profissaoVitima_bo,nomeSuspeito_bo, sobrenomeSuspeito_bo, idadeSuspeito_bo, enderecoSuspeito_bo, telefoneSuspeito_bo, dataOcorrido_bo, descricaoOcorrido_bo,assuntoOcorrido_bo, cod_user) values (:nomev, :sobrenomev, :idadev, :enderecov, :telefonev, :profissaov, :nomes, :sobrenomes, :idades, :enderecos, :telefones, :datao, :descricaoo, :assuntoo, :id)";

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
$inserir-> bindParam (':id', $id);


$resultado = $inserir->execute();

if( ! $resultado)
{
  var_dump( $inserir->errorInfo() );
  exit;
}

echo $inserir->rowCount(). "Boletim de Ocorrencia foi registrado com sucesso!!!";


 ?>
 <a href="cadastrar.php"class="btn btn-success">Registrar um Novo B.O</a>
  <a href="../admin/admin.php"class="btn btn-primary">HOME</a>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
