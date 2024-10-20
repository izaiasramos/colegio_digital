<?php
#para que o codigo de session dê certo preciso ativa-lo aqui no validar e na pagina front responsavel,nesse caso no dashboard.php,dizendo que nesse arquivo será iniciado um arquivo de seção:

session_start();
include "../Models/loginaluno.php";
include "../Models/alunomatricula.php";
//abaixo BD 
include "../DAO/conexao.php";
include "../DAO/cad.php";


$lo = new Login();

$lo -> setEmail($_POST['email']);
$lo -> setSenha($_POST['senha']);


#verifica se email e senha do login estao salvos no BD e retorna if ou else:

 $return = verifica_acesso($lo->getEmail(), $lo->getSenha());

if ($return){
 echo "dados corretos";

 #criar seção para o usuario logado:

 $_SESSION['id_aluno'] = $return['id_aluno'];
 $_SESSION['nome'] = $return['nome'];

 echo "<script language=javascript>window.location.replace('../Views/dashboard.php');</script>";
}else{
 echo "dados invalidos";
}
/* Abaixo utilizado para testar se ta retornando os dados de login:
echo $lo -> getEmail();
echo "<br/>";
echo $lo -> getSenha(); */
?>