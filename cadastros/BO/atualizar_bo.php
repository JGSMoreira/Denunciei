<?php
$titulo = "Atualizar";
include '../conexao/conexao.php';
if(empty($_GET['id'])){
  header ('location.consulta.php');
}else{
  $id = filter_var ($_GET['id']);
  $sql = "SELECT * FROM pessoa where cod_pes =:id";
  $consulta = $conn->prepare($sql);
  $consulta->bindParam(':id', $id);
  $consulta->execute();
  $registro = $consulta->fetch(PDO::FETCH_OBJ);
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

     <title><?= $titulo ?></title>
   </head>
   <body>

     <form method="post" action="atualizar_salvar.php">
  <div class="form-group">
    <input type="hidden" name="cod_pes" value="<?php echo $registro->cod_pes;  ?>"
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id='nome' name="nome"  value="<?php echo $registro->nome_pes;  ?>">

  </div>
  <form method="post" action="atualizar_salvar.php">
<div class="form-group">
 <label for="sobrenome">Sobrenome</label>
 <input type="text" class="form-control" id='sobrenome' name="sobrenome"  value="<?php echo $registro->sobrenome_pes;  ?>">

</div>
<form method="post" action="atualizar_salvar.php">
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id='email' name="email"  value="<?php echo $registro->email_pes;  ?>">

</div>
  <div class="form-group" action="atualizar_salvar.php">
    <label for="idade">Idade</label>
    <input type="number" class="form-control" id='idade' name="idade" value="<?php echo $registro->idade_pes;  ?>">
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
