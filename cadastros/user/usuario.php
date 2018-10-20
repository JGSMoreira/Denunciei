 <?php
 //CONFIGURAÇÃO PADRÃO
 include '../../padroes/default.php';

 //CONFIGURAÇÕES EDITÁVEIS
 $pagina = 'Cadastrar novo usuário'; //Nome da página
 $metodo = 'post'; //Método de envio de formulário
 $acao = 'usuario_salvar.php'; //O que deve ser feito ao apertar o botão de envio
 $salvar = 'Cadastrar usuário'; //Texto do botão de envio
 $cancelar_acao = '..\..\admin.php'; // O que deve ser feito ao apertar o botão de cancelamento
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

          <h2 style="margin-top: 2px">Dados do usuário</h2>

          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome do usuário.">
          </div>

          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="Digite o e-mail do usuário.">
          </div>

          <h2>Senha e confirmação</h2>

          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="Digite a senha">
          </div>


          <div class="form-group">
            <label for="confirm-senha">Confirmar senha</label>
            <input type="password" class="form-control" name="confirm-senha" placeholder="Confirme a senha.">
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
     <!--<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
     <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script> -->
    </body>
  </html>
