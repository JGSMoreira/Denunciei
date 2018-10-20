<?php
//CONFIGURAÇÃO PADRÃO
include '../../padroes/default.php';

//CONFIGURAÇÕES EDITÁVEIS
$pagina = 'Fazer Denúncia'; //Nome da página
$metodo = 'post'; //Método de envio de formulário
$acao = 'cadastrar_bo_salvar.php'; //O que deve ser feito ao apertar o botão de envio
$salvar = 'Enviar denúncia'; //Texto do botão de envio
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

     <form method="<?= $metodo ?>" action="<?= $acao ?>">
       <div class="centro container">

         <!-- INÍCIO DA PARTE EDITÁVEL -->

         <h2 style="margin-top: 2px">Informações Básicas</h2>

         <div class="form-group">
           <label for="nome">Título</label>
           <input type="text" class="form-control" name="titulo"  placeholder="Digite o titulo da denúncia." required>
         </div>

         <div class="form-group">
           <label for="suspeito">Suspeito</label>
           <input type="text" class="form-control" name="suspeito" placeholder="Digite o nome do suspeito." required>
         </div>

         <div class="form-group">
           <label for="data">Data do ocorrido</label>
           <input type="date" class="form-control" name="data"  placeholder="Digite a data do ocorrido." required>
         </div>

         <h2>Descrição</h2>

         <div class="form-group">
           <label for="motivo">Motivo da denúncia</label>
           <select class="form-control" name="motivo">
             <option>Selecione o motivo da denúncia</option>
             <option>Furto</option>
             <option>Estupro</option>
             <option>Roubo</option>
             <option>Homicídio</option>
           </select>
         </div>

        <div class="form-group">
           <label for="descricao">Descrição</label>
           <textarea rows="10" cols="30" class="form-control" name="descricao"  placeholder="Descreva o ocorrido com a maior quantidade de detalhes possíveis (não digite o seu nome)." required></textarea>
        </div>

        <h2>Contato</h2>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email"  placeholder="Digite o seu email." required>
        </div>

        <!-- FIM DA PARTE EDITÁVEL -->

      </div>
      <div class="buttonbar">
        <button type="submit" class="btn btn-primary"><?= $salvar ?></button>
        <a href="<?= $cancelar_acao ?>" class="btn btn-danger">Cancelar</a>
      </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script> -->
   </body>
 </html>

 </a>
