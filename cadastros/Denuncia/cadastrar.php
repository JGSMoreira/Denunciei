<?php
$titulo = "Fazer Denúncia";

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

     <title>taINSHOCK - <?= $titulo ?></title>
   </head>
   <body>
     <form method="post" action="cadastrar_bo_salvar.php">
       <div class="form-group">
         <label for="nome">Titulo da Denúncia</label>
         <input type="text" class="form-control" name="titulo"  placeholder="Digite o titulo da denúncia">
       </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email"  placeholder="Digite o email">
      </div>

      <div class="form-group">
         <label for="descricao">Descrição</label>
         <textarea rows="10" cols="30" class="form-control" name="descricao"  placeholder="Descreva o ocorrido com a maior quantidade de detalhes possíveis."></textarea>
      </div>

      <div class="form-group">
        <label for="idade">Idade</label>
        <input type="number" class="form-control" id='idade' name="idade" placeholder="Digite a idade">
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
      <a href="consulta.php" class="btn btn-danger">Cancelar</a>
</form>


     <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   </body>
 </html>

 </a>
