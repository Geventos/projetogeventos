<?php
require_once("classes/Conexao.php");
require_once("classes/Usuario.php");
class DAOUsuario {
    private $conexao;
    
    function __construct() {
        $this->conexao = Conexao::getInstance();
    }
    
    public function criar($usuario) {
        $sql = "insert into usuario(nome_completo, senha, email, cpf) values('";
        $sql = $sql . $usuario->getNomecompleto() . "','";
        $sql = $sql . $usuario->getSenha() . "','";
        $sql = $sql . $usuario->getEmail() . "','";
        $sql = $sql . $usuario->getCpf() . "')";
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $linhas = mysqli_affected_rows($banco);
        $this->conexao->Desconectar();        
        if($linhas == 1){
            echo "<script type='text/javascript'>
                    alert('Cadastro efetuado com sucesso!');
                </script>";
         }else{
            echo "<script type='text/javascript'>
                    alert('Cadastro N�O efetuado!');
                </script>";
        }
    }
    
    function login($email, $senha){
        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $linhas = mysqli_affected_rows($banco);
        $this->conexao->Desconectar();        
        if($linhas > 1){
            return true;
         }else{
             return FALSE;
        }
    }   

}