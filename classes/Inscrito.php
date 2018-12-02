<?php
class Inscrito {
    private $nome;
    private $cpf;
    private $instituicao;
            
    function __construct($nome, $cpf, $instituicao) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->instituicao = $instituicao;
    }
    
    function getNome() {
        return $this->nome;
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

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }
}
