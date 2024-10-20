<?php

class Aluno {
    private $nome;
    private $id_aluno;
    private $cpf;
    private $usuario;
    private $cidade;
    private $estado;
    private $cep;
    private $email;
    private $senha;
    private $confirmarsenha;
    
                     /*get-pega informação do atributo/variavel*/
    public function getNome(){
        return $this->nome;
    }                /*set-coloca informação no atributo/variavel*/
    public function setNome($p){
         return $this->nome=$p;
    }
    
    // public function getId_aluno(){
        // return $this->id_aluno;
    // }              
    // public function setId_aluno($p){
        //  return $this->id_aluno=$p;
    // }


    public function getCpf(){
        return $this -> cpf;
    }   
    public function setCpf($p){
        return $this -> cpf=$p;
    }

    public function getUsuario(){
        return $this-> usuario;
    }
    public function setUsuario($p){
        return $this -> usuario = $p;
    }

    public function getCidade(){
        return $this -> cidade;
    }
    public function setCidade($p){
        return $this -> cidade = $p;
    }

    public function getEstado(){
        return $this -> estado;
    }
    public function setEstado($p){
        return $this -> estado = $p;
    }
    public function getCep(){
        return $this -> cep;
    }
    public function setCep($p){
        return $this -> cep = $p;
    }
    public function getEmail(){
        return $this -> email;
    }
    public function setEmail($p){
        return $this -> email = $p;
    }
    public function getSenha(){
        return $this -> senha;
    }
    public function setSenha($p){
        return $this -> senha = $p;
    }
    public function getConfirmarsenha(){
        return $this -> confirmarsenha;
    }
    public function setConfirmarsenha($p){
        return $this -> confirmarsenha = $p;
    }

}
?>