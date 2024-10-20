<?php
/*esse arquivo destroi a seção ao sair, para que seja obrigado logar novamente para acessar ao sistema:*/


session_start();
unset($_SESSION['id_aluno']);
session_destroy();

            
$teste= "Sessão encerrada com sucesso!";

 echo "<script language=javascript>window.location.replace('../Views/login.php?mensagem=$teste');</script>";

?>