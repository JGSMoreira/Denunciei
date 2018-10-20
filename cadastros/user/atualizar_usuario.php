<?php
$titulo = "Atualizar usuário";
include '../conexao/conexao.php';
if(empty($_GET['id'])){
  header ('location.consulta.php');
}else{
  $id = filter_var ($_GET['id']);
  $sql = "SELECT * FROM user where cod_user =:id";
  $consulta = $conn->prepare($sql);
  $consulta->bindParam(':id', $id);
  $consulta->execute();
  $registro = $consulta->fetch(PDO::FETCH_OBJ);
}
 ?>
 <!DOCTYPE html>
 <html lang="pt-br" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title><?php echo $titulo; ?></title>
   </head>
   <body>
     <form action="atualizar_usuario_salvar.php" method="post">
       <div class="form-group">
         <nav>
           <input type="hidden" name="cod_user" value="<?php echo $registro->cod_user; ?>">
           <label for="username">Nome de usuário</label>
           <input type="text" name="username" value="<?php echo $registro->nome_user; ?>" placeholder="O nome de usuário não pode ficar em branco">
         </nav>
       </div>
       <div class="form-group">
         <label for="password">Senha</label>
         <input type="password" name="password" value="<?php echo $registro->pass_user; ?>">
       </div>
       <div class="form-group">
         <label for="confirm-password">Confirme a nova senha</label>
         <input type="password" name="confirm-password" placeholder="Confirmar senha">
       </div>

       <button type="submit" class="btn btn-primary">Enviar</button>
         <a href="consulta.php" class="btn btn-danger">Cancelar</a>

     </form>
   </body>
 </html>
