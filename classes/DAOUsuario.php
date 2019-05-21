<?php
require_once("classes/Conexao.php");
require_once("classes/Usuario.php");
class DAOUsuario {
    private $conexao;
    
    function __construct() {
        $this->conexao = Conexao::getInstance();
    }
    
    public function Criar($usuario) {
        $sql = "insert into usuario(nome_completo, senha, email) values('";
        $sql = $sql . $usuario->getNomecompleto() . "','";
        $sql = $sql . $usuario->getSenha() . "','";
        $sql = $sql . $usuario->getEmail() . "')";
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
                    alert('Cadastro NÃO efetuado!');
                </script>";
        }
    }
    
    function login($email, $senha){
        $sql = "select * from usuario where email= '";
        $sql = $sql . $email . "' and senha='";
        $sql = $sql . $senha . "'";
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