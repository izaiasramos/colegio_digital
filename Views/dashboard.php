<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Colégio Master</title>
    <meta charset="utf8">
    <link href="dashboard.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<?php
   include "menu.php";
   
?>
<div id="container">

<div class="row">
  <div class="col-sm-12 d-flex justify-content-between">
      <p class="h3" style="color:#30a5ff;">Master EAD</p> 
      
      <div class="row">
      <h6 class="mb-1 mr-2"> 
      
      <?php 
      
      include "../Models/loginaluno.php";
      include "../DAO/conexao.php";
      include "../DAO/cad.php";

      //se tiver secão ativa entrará no IF para puxar o nome que esta no BD, se não entrara no ELSE:
      
      $logado = $_SESSION;

       if ($logado){
       echo $_SESSION['nome'];  
        } 
        else{
          echo "faca login";
        } 
        ?> <br/> Seja Bem Vindo!
        </h6>
      <a id="sair_deslogar" href="../Controls/sair.php" class="btn btn-primary pt-2 mr-3"> Sair </a>
      </div>
  </div>
</div>





<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4 d-flex justify-content-center">
      <button class="col-sm-2 btn btn-outline-success m-3" type="button" style="height:3.5vw;">Main button</button>
      <button class="col-sm-2 btn btn-outline-success m-3" type="button" style="height:3.5vw;">Main button</button>
      <button class="col-sm-2 btn btn-outline-success m-3" type="button" style="height:3.5vw;">Main button</button>
      <button class="col-sm-2 btn btn-outline-success m-3" type="button" style="height:3.5vw;">Main button</button>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </nav>

  <div class="banner">
    <img src="img/banner.jpg"/>
  </div>

  


     <div id="c1">
       <h4>Engenharia de Software</h4>
       <p>Nessa graduação de 8 semestres, nossos alunos vêem sobre todos os protocolos 
da rede e dos Host, e aprendem a criar e gerenciar todos os tipos de sistemas e 
softwares, sejam eles B2B, B2C ou C2C.</p>

   </div>
    <div id="c2"> 
      <h4>Curso B7Web Fullstack</h4>
      <p>Nessa modalidade voce verá: 
Como funciona as redes e a internet - Como colocar um site no ar (Web) 
- Como funciona os Domínios - HTML5 e CSS3 - PHP.</p>
     
    </div>
    <div id="c3">
        <h4>Back-and</h4>
        <p>Fluxogramas - Lógica de Programação - PHP 1 - PHP 
2 - Javascript - Bootstrap - Domínios e Hospedagem - Projetos - Programação 
Orientada a Objetos - Banco de Dados - Java.
</p>
    </div>
    <div id="c4">
       <h4>Estágio</h4>
       <p>Nossos melhores alunos serão selecionados para estagiar, para solidificar 
ainda mais os conhecimentos adquiridos e sair com experiência.</p>
       
    </div>
  
    <div style="display:flex;justify-content:center;clear:both;font-size:2.5vw;background-color:#30a5ff;color:white;height:50px;"> Abaixo voce verá alguns dos projetos que voce desenvolverá:</div>


</div>
  





<div id="container">
  
  
  

</br> </br>
  <div id="projetos">
    <div id="p0"> 
      <video controls > 
        <source autostart="true" src="img/Medicenter -  nova versão criei para treinar na prática_.mp4" type="video/mp4" loop>
      </video></div>
    <div id="p1"><img src="img/imagem inicial shopp virtual que fiz.png"></div>
    <div id="p2"><img src="img/imagem produtos do shopp virtual.png"></div>
    <div id="p3"><img src="img/cadastro usuario do shopp virtual.png" ></div>
    <div id="p4"><img src="img/divs transparente e uma com gradiente.png"></div>
   
  </div>
</div> 
   
<div class="sobremim">
   <div id="sobre1">
       <h3>Softskills</h3>
       <i style="">Metódico - Esses anos trabalhando como militar enraizou em mim que para um serviço bem feito temos que traçar e planejar muito bem cada etapa para melhor aproveitamento.</i> </br></br>
     <i>Perfeccionista - Há 7 anos trabalho em um ritmo acelerado sem perder a qualidade, o tempo que temos para entregar cada tarefa não pode afetar a qualidade do serviço.</i>
   </div>
  
   <div id="sobre2">
   </br>
        <i>Sede de Aprender - Amo cada parte do desenvolvimento, e amo ainda mais buscar aprendizado, por isso do o meu melhor todos os dias para adquirir mais conhecimento.</i> </br></br>
   </div>
   <div id="sobre3">
      <h3>Hardskills</h3>
       <i>HTML5 | CSS3 - Com HTML5 e CSS3 em um nível avançado porém ainda aprendendo, consigo criar qualquer tipo de Template,Saas, Ecommerce com suas sub páginas,todas bem responsivas e com possibilidade de qualquer tipo de alteração com técnicas avançadas para deixar o layout moderno ou no gosto do cliente.</i> 
     
   </div> 
   <div id="sobre4"> </br>
       <i>PHP - estudando atualmente PHP, já consigo puxar dos input HTML a resposta ou 
requisição do usuário,e retornar algum valor ou resultado. Desvio condicional, 
Operadores e conversões, Loops, Orientação a Objetos.</i>
      <i>GIT - git add, git commit -m, git push, git status, git commit --amend (para modificar a mensagem do commit mais recente), git pull (para puxar o ultimo git push que foi feito em outra máquina).</i>
     
   </div>
   
</div>


</div>







<?php
   include "footer.php";
?>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>
