<?php
require_once("conexaoBD.php");
class ClasseEvento {
    private $nome;
    private $sobre;
    private $datainicio;
    private $datafim;
    private $programacao;
    private $contatos;
    
    public function ClasseEvento($nome, $sobre, $datainicio, $datafim, $programacao, $contatos) {
        $this->setNome($nome);
        $this->setSobre($sobre);
        $this->setDatainicio($datainicio);
        $this->setDatafim($datafim);
        $this->setProgramacao($programacao);
        $this->setContatos($contatos);
    }
    
    function getNome() {
        return $this->nome;
    }
    function getSobre() {
        return $this->sobre;
    }
    function getDatainicio() {
        return $this->datainicio;
    }
    function getDatafim() {
        return $this->datafim;
    }
    function getProgramacao() {
        return $this->programacao;
    }
    function getContatos() {
        return $this->contatos;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setSobre($sobre) {
        $this->sobre = $sobre;
    }
    function setDatainicio($datainicio) {
        $this->datainicio = $datainicio;
    }
    function setDatafim($datafim) {
        $this->datafim = $datafim;
    }
    function setProgramacao($programacao) {
        $this->programacao = $programacao;
    }
    function setContatos($contatos) {
        $this->contatos = $contatos;
    }    

}
