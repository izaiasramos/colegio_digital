<?php
include "../Models/professormatricula.php";

$pro = new  ProfessorMatricula();

$pro -> setNome($_POST['nome']);
$pro -> setCpf($_POST['cpf']);
$pro -> setCarteiratrabalho($_POST['carteiratrabalho']);
$pro -> setCidade($_POST['cidade']);
$pro -> setEstado($_POST['estado']);
$pro -> setCep($_POST['cep']);
$pro -> setEmail($_POST['email']);
$pro -> setSenha($_POST['senha']);
$pro -> setConfirmarsenha($_POST['confirmarsenha']);
$pro -> setArquivo($_POST['arquivo']);
$pro -> setDaraulade($_POST['daraulade']);
$pro -> setAceitartermos($_POST["aceitartermos"]);


echo $pro -> getNome();
                echo "<br/>";
echo $pro -> getCpf();
                echo "<br/>";
echo $pro -> getCarteiratrabalho();
                echo "<br/>";
echo $pro -> getCidade();
                echo "<br/>";
echo $pro -> getEstado();
                echo "<br/>";
echo $pro -> getCep();
                echo "<br/>";
echo $pro -> getEmail();
                echo "<br/>";
echo $pro -> getSenha();
                echo "<br/>";
echo $pro -> getConfirmarsenha();
                echo "<br/>";
echo $pro -> getArquivo();
                echo "<br/>";
echo $pro -> getDaraulade();
                echo "<br/>";
echo $pro -> getAceitartermos();
                echo "<br/>";


?>