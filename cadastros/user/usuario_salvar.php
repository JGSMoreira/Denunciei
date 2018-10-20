<?php
include '../conexao/conexao.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO user VALUES (null, :user, :senha)";

$inserir = $conn->prepare($sql);
$inserir->bindParam (":user", $username);
$inserir->bindParam (":senha", $password);

$resultado = $inserir->execute();

if( ! $resultado)
{
  var_dump( $inserir->errorInfo() );
  exit;
}

echo $inserir->rowCount(). "linhas";
?>

<a href="usuario.php"class="btn btn-success">Cadastrar novo usuario</a>
 <a href="consulta.php"class="btn btn-primary">HOME</a>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
