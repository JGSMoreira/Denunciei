<?php
//CONFIGURAÇÃO PADRÃO
include '../padroes/default.php';

//CONFIGURAÇÕES EDITÁVEIS
$pagina = 'Consulta de Boletins de Ocorrência'; //Nome da página
$metodo = 'post'; //Método de envio de formulário
$acao = '..\..\index.html'; //O que deve ser feito ao apertar o botão de envio
$salvar = 'Ok, voltar ao início.'; //Texto do botão de envio
$cancelar_acao = 'sucesso.php'; // O que deve ser feito ao apertar o botão de cancelamento
//FIM DAS CONFIGURAÇÕES EDITÁVEIS

//BANCO DE DADOS
include '../conexao/conexao.php';

$sql = "SELECT * FROM bo;";
$consulta = $conn->prepare($sql);
$consulta->execute();

$registros = $consulta->fetchAll(PDO:: FETCH_OBJ);

// CONFIGURAÇÃO PADRÃO
$title = $sistema.' - '.$pagina;
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">

     <title><?= $title ?></title>
   </head>
   <body>
     <div class="topo">
       <h1 id="nomesite"><?= $sistema ?></h1>
       <p id="frase"><i><?= $frase ?></i></p>
     </div>

     <div class="titulopage">
       <h2 class=""><?= $pagina ?></h2>
     </div>

       <div class="centro container">

         <!-- INÍCIO DA PARTE EDITÁVEL -->
         <table class="table">
           <thead>
             <tr>
               <th>Vítima</th>
               <th>Idade</th>
               <th>Suspeito</th>
               <th>Data da Ocorrência</th>
               <th>Motivo da Denúncia</th>
               <th>Opções</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($registros as $registro) { ?>
            <tr>
               <td><?php  echo $registro->nomeVitima_bo." ".$registro->sobrenomeVitima_bo; ?></td>
               <td><?php  echo $registro->datanVitima_bo; ?></td>
               <td><?php  echo $registro->nomeSuspeito_bo." ".$registro->sobrenomeSuspeito_bo; ?></td>
               <td><?php  echo $registro->dataOcorrido_bo; ?></td>
               <td><?php  echo $registro->assuntoOcorrido_bo; ?></td>
               <td><a  href="../cadastros/BO/atualizar.php?id=<?php echo $registro->cod_bo;?>" class="btn btn-primary">Visualizar</a>
               <a  href="../cadastros/BO/deletar.php?id=<?php echo $registro->cod_bo;?>" class="btn btn-danger">Excluir</a></td>
           </tr>
           <?php  }?>
        <!-- FIM DA PARTE EDITÁVEL -->

      </div>
      <div class="buttonbar">
        <a href="../cadastros/bo/cadastrar.php" class="btn btn-primary">Registrar novo B.O.</a>
        <a href="../admin/index.php" class="btn btn-primary">Voltar para o Dashboard</a>
      </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   </body>
 </html>
