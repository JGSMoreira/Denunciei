<?php
include '../../conexao/conexao.php';
$titulo = "Consultas de B.O";

$sql = "SELECT * FROM bo;";
$consulta = $conn->prepare($sql);
$consulta->execute();

$registros = $consulta->fetchAll(PDO:: FETCH_OBJ);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title><?= $titulo ?></title>
   </head>
   <body>



<h1>Registros dos Boletins de Ocorrência</h1>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<table class="table table-striped">
<thead class="thead-dark">
<table border="1px">
  <tr>
    <!-- <th>Cod</th> -->
    <th>Nome da Vítima</th>
  <!--  <th>Sobrenome da Vítima</th>-->
    <th>Data de Aniversário</th>
  <!--  <th>Endereço da Vítima</th>
    <th>Telefone da Vítima</th>
    <th>Profissão da Vítima</th>-->
    <th>Nome do Suspeito</th>
    <th>Sobrenome do Suspeito</th>
    <!--<th>Data de Aniversário do Suspeito</th>-->
  <!--  <th>Endereço do Suspeito</th>
    <th>Telefone do Suspeito</th>-->
    <th>Data da Ocorrência</th>
    <th>Motivo da Denúncia</th>
  <!--  <th>Descrição do Caso</th>-->
    <th>Opções</th>

  </tr>

  <?php foreach ($registros as $registro) { ?>
    <tr>
      <!--<td><?php  echo $registro->cod_bo; ?></td>-->
      <td><?php  echo $registro->nomeVitima_bo." ".$registro->sobrenomeVitima_bo; ?></td>
    <!--  <td><?php  echo $registro->sobrenomeVitima_bo; ?></td>-->
      <td><?php  echo $registro->idadeVitima_bo; ?></td>
      <!--  <td><?php  echo $registro->enderecoVitima_bo; ?></td>
    <td><?php  echo $registro->telefoneVitima_bo; ?></td>
      <td><?php  echo $registro->profissaoVitima_bo; ?></td>-->
      <td><?php  echo $registro->nomeSuspeito_bo; ?></td>
      <td><?php  echo $registro->sobrenomeSuspeito_bo; ?></td>
    <!--  <td><?php  echo $registro->idadeSuspeito_bo; ?></td>
      <td><?php  echo $registro->enderecoSuspeito_bo; ?></td>
      <td><?php  echo $registro->telefoneSuspeito_bo; ?></td>-->
      <td><?php  echo $registro->dataOcorrido_bo; ?></td>
      <!--<td><?php  echo $registro->descricaoOcorrido_bo; ?></td>-->
      <td><?php  echo $registro->assuntoOcorrido_bo; ?></td>

      <td>

        <a href="atualizar.php?id=<?php echo $registro->cod_pes; ?>"class="btn btn-primary">Editar</a>

      <a  href="deletar.php?id=<?php echo $registro->cod_pes;?>" class="btn btn-danger">Excluir</a>



<?php  }?>
  </td>
</tr>



  <!-- JavaScript (Opcional) -->
 <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>
</html>
