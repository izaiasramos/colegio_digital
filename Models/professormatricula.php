<?php

class ProfessorMatricula{
    
    private $nome;
    private $cpf;
    private $carteiratrabalho;
    private $cidade;
    private $estado;
    private $cep;
    private $email;
    private $senha;
    private $confirmarsenha;
    private $arquivo;
    private $daraulade;
    private $aceitartermos;

    public function getNome(){
        return $this -> nome;
    }
    public function setNome($p){
        return $this -> nome = $p;
    }
    public function getCpf(){
        return $this -> cpf;
    }
    public function setCpf($p){
        return $this -> cpf = $p;
    }
    public function getCarteiratrabalho(){
        return $this -> carteiratrabalho;
    }
    public function setCarteiratrabalho($p){
        return $this -> carteiratrabalho = $p;
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
    public function getArquivo(){
        return $this -> arquivo;
    }
    public function setArquivo($p){
        return $this -> arquivo = $p;
    }
    public function getDaraulade(){
        return $this -> daraulade;
    }
    public function setDaraulade($p){
        return $this -> daraulade = $p;
    }
    public function getAceitartermos(){
        return $this -> aceitartermos;
    }
    public function setAceitartermos($p){
        return $this -> aceitartermos = $p;
    }

}

?>