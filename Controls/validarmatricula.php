<?php

include "../Models/alunomatricula.php";
//abaixo BD 
include "../DAO/conexao.php";
include "../DAO/cad.php";

$al = new Aluno();


$al -> setNome($_POST['nome']);
// $al -> setId_aluno($_POST['id_aluno']);
$al -> setCpf($_POST['cpf']);
$al -> setUsuario($_POST['usuario']);
$al -> setCidade($_POST['cidade']);
$al -> setEstado($_POST['estado']);
$al -> setCep($_POST['cep']);
$al -> setEmail($_POST['email']);
$al -> setSenha($_POST['senha']);
$al -> setConfirmarsenha($_POST['confirmarsenha']);

/*acima os set insere as informações e no BD o get guarda/puxa as informações inseridas*/

/* abaixo utilizado para testar se esta puxando as informaçoes inseridas enquanto o BD ainda não esta feito e conectado pelo include:

var_dump ($al);

echo $al-> getNome(); echo "<br>"
echo $al -> getCpf();
echo $al -> getUsuario();
*/

if (cadastrar($al)) {

    $teste = "cadastro realizado com sucesso !";
    echo "<script language=javascript>window.location.replace('../Views/login.php?mensagem=$teste');</script>";

}else{
    echo "falha ao cadastrar";
}

?>