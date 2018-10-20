<?php
//CONFIGURAÇÃO PADRÃO
include 'padroes/default.php';

//CONFIGURAÇÕES EDITÁVEIS
$pagina = 'Início'; //Nome da página
$metodo = 'post'; //Método de envio de formulário
$acao = 'log/login.php'; //O que deve ser feito ao apertar o botão de envio
$salvar = 'Acessar Painel'; //Texto do botão de envio
$cancelar_acao = 'sucesso.php'; // O que deve ser feito ao apertar o botão de cancelamento
//FIM DAS CONFIGURAÇÕES EDITÁVEIS

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

       <div class="row">

         <div class="col">
           <h2><i class="fas fa-map"></i> MAPA DE CRIMES</h2>

           <!-- INÍCIO DA PARTE EDITÁVEL -->
           <center><i>Em breve.</i></center>
          <!-- FIM DA PARTE EDITÁVEL -->

         </div>

         <div class="col">
           <h2><i class="fas fa-chart-line"></i> Estátisticas</h2>

           <!-- INÍCIO DA PARTE EDITÁVEL -->
           <center><i>Nenhum dado registrado.</i></center>
           <h3>Estupros:</h3>
           <h3>Furtos:</h3>
           <h3>Homicidios:</h3>
           <h3>Roubos:</h3>
           <h3>Outros:</h3>
           <hr>
           <h3>TOTAL:</h3>
           <!-- FIM DA PARTE EDITÁVEL -->

         </div>

       </div>
    </div>

    <div class="buttonbar" style="padding-bottom: -5px;">
      <a href="<?= $acao ?>"><i class="fas fa-shield-alt"></i> <i>Adminstração</i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   </body>
 </html>

 </a>
