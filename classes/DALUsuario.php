<?php
require_once("classes/Conexao.php");
require_once("classes/Usuario.php");
class DALUsuario {
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
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
}
