<?php
class Login{

    private $email;
    private $senha;

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
}


?>