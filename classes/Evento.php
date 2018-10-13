<?php

class Evento {
    private $nome;
    private $sobre;
    private $datainicio;
    private $datafim;
    private $programacao;
    private $contatos;
    
    public function Evento($nome, $sobre, $datainicio, $datafim, $programacao, $contatos) {
        $this->setNome($nome);
        $this->setSobre($sobre);
        $this->setDatainicio($datainicio);
        $this->setDatafim($datafim);
        $this->setProgramacao($programacao);
        $this->setContatos($contatos);
    }
    
    public function getNome() {
        return $this->nome;
    }
    public function getSobre() {
        return $this->sobre;
    }
    public function getDatainicio() {
        return $this->datainicio;
    }
    public function getDatafim() {
        return $this->datafim;
    }
    public function getProgramacao() {
        return $this->programacao;
    }
    public function getContatos() {
        return $this->contatos;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setSobre($sobre) {
        $this->sobre = $sobre;
    }
    public function setDatainicio($datainicio) {
        $this->datainicio = $datainicio;
    }
    public function setDatafim($datafim) {
        $this->datafim = $datafim;
    }
    public function setProgramacao($programacao) {
        $this->programacao = $programacao;
    }
    public function setContatos($contatos) {
        $this->contatos = $contatos;
    }    
    
}
