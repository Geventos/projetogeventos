<?php
class Conexao {
    protected $servidor;
    protected $usuario;
    protected $senha;
    protected $nomeBanco;
    protected $banco;
    
    function __construct($servidor = "localhost", $usuario = "root", $senha = "", $nomeBanco = "sisgev") {
        $this->setServidor($servidor);
        $this->setUsuario($usuario);
        $this->setSenha($senha);
        $this->setNomeBanco($nomeBanco);
        $this->Conectar();
    }
    
    function getServidor() {
        return $this->servidor;
    }
    function getUsuario() {
        return $this->usuario;
    }
    function getSenha() {
        return $this->senha;
    }
    function getNomeBanco() {
        return $this->nomeBanco;
    }
    function getBanco() {
        return $this->banco;
    }
    function setServidor($servidor) {
        $this->servidor = $servidor;
    }
    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
    function setSenha($senha) {
        $this->senha = $senha;
    }
    function setNomeBanco($nomeBanco) {
        $this->nomeBanco = $nomeBanco;
    }
    function setBanco($banco) {
        $this->banco = $banco;
    }
    
    public function Conectar() {
        $this->banco = new mysqli(
        $this->getServidor(),
        $this->getUsuario(),
        $this->getSenha(),
        $this->getNomeBanco()               
        );
        if ($this->banco->connect_error) {
            die('Erro de conexão (' . $this->banco->connect_errno . '):' 
            . $this->banco->connect_error);
        }
    }
    
    public function Desconectar() {
        $this->banco->close();
    }   
}
