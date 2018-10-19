<?php
$titulo= "Cadastrar novo usuário";

 ?>

 <!DOCTYPE html>
 <html lang="pt-br" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title><?php echo $titulo; ?></title>
   </head>
   <body>
     <form action="usuario_salvar.php" method="post">
       <div class="form-group">
         <label for="username">Nome de usuário</label>
         <input type="text" name="username" placeholder="Username">
       </div>
       <div class="form-group">
         <label for="password">Senha</label>
         <input type="password" name="password" placeholder="Senha">
       </div>
       
         <button type="submit" class="btn btn-primary">Enviar</button>
         <a href="consulta.php" class="btn btn-danger">Cancelar</a>

     </form>
   </body>
 </html>
