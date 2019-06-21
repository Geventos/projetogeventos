<?php
require_once("classes/Conexao.php");
require_once("classes/Usuario.php");
class DAOUsuario {
    private $conexao;
    
    function __construct() {
        $this->conexao = Conexao::getInstance();
    }
    
    public function criar($usuario) {
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
        $sql = "SELECT * FROM usuario WHERE email ='" .$email. "' and senha='" .$senha. "'";
        $usuario = mysqli_query($this->conexao->getBanco(), $sql);
        $retorno = mysqli_fetch_assoc($usuario);

        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $resultado = mysqli_affected_rows($banco);       
        if($resultado == 1){
            return $retorno;
        }else{
             return 0;
        }
    }

}