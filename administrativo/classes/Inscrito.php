<?php
class Inscrito {
    private $nome;
    private $email;
    private $cpf;
    private $instituicao;
            
    function __construct($nome, $email, $cpf, $instituicao) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->instituicao = $instituicao;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getInstituicao() {
        return $this->instituicao;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }
    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }
}
