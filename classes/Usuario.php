<?php
class Usuario {
    private $nomecompleto;
    private $email;
    private $senha;
    private $cpf;
    
    function __construct($nomecompleto, $email, $senha, $cpf) {
        $this->nomecompleto = $nomecompleto;
        $this->email = $email;
        $this->senha = $senha;
        $this->cpf = $cpf;
    }
    
    function getNomecompleto() {
        return $this->nomecompleto;
    }
    function getEmail() {
        return $this->email;
    }
    function getSenha() {
        return $this->senha;
    }
    function setNomecompleto($nomecompleto) {
        $this->nomecompleto = $nomecompleto;
    }
    function setEmail($email) {
        $this->email = $email;
    }
    function setSenha($senha) {
        $this->senha = $senha;
    }   
    
    function getCpf() {
        return $this->cpf;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }
}
