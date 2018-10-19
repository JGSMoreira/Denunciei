<?php
$titulo = "Admint";
session_start();
if (isset($_SESSION["logado"]) && $_SESSION["logado"]) {
$logado =true;
echo "Welcome ". $_SESSION["usuario_nome"];
}



 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title><?= $titulo ?></title>
  </head>
  <body >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <div align="right">

      <a href="../login/logout.php" class="btn btn-danger">Logout</a>
    </div>
    <div class="">
      <a href="../pessoa/cadastrar.php" class="btn btn-success">Cadastrar Nova Pessoa</a>

    </div>
    <div align="left">
<a href="../pessoa/consulta.php" class="btn btn-success">Consultar Pessoa</a>
    </div>
    <div class="">
        <a href="../pessoa/consulta.php" class="btn btn-success">Atualizar Pessoa</a>
    </div>
  <div class="">
      <a href="../endereco/cadastrar_endereco.php" class="btn btn-success">Cadastrar Novo Endereço</a>

  </div>
  <div class="">
    <a href="../endereco/consulta_endereco.php" class="btn btn-success">Consultar Endereço</a>
  </div>
  <div class="">
    <a href="../endereco/consulta_endereco.php" class="btn btn-success">Atualizar Endereço</a>
  </div>






        <a href="../user/usuario.php" class="btn btn-primary">Cadastrar Usuário</a>
        <div class="">
          <a href="../user/consulta_usuario.php" class="btn btn-primary">Atualizar Usuário</a>

        </div>



   <!-- JavaScript (Opcional) -->
   <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </body>
</html>
