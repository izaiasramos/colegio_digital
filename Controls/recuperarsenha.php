<!DOCTYPE html>
<html>
 <head>
  <title>Colégio Master</title>
  <meta charset="utf8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/
bootstrap.min.css" integrity="sha384-MCw98/
SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="matricula.css">
 </head>
 <body>


 <?php 
include "menu.php";
?>

<div class="container-fluid justify-content-center" style='height:42.6vw'>
  <div class="row justify-content-center">
    <div class="col-sm-7  formulario">
<form action="../Controls/validarloginaluno.php" method="post">

     <h2 class="text-center">Recuperar Senha</h2>
<br/>

    <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" 
aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Enviaremos ao seu email para recuperar sua senha.</small>
  </div>


  <button class="btn btn-primary" type="submit">Enviar</button>
</form>
</div>


</div>
</div>

<?php
include "footer.php";
?>







 

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X
+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></
script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
crossorigin="anonymous"></script>

 </body>
</html>