<?php
require_once("classes/Conexao.php");
require_once("classes/Evento.php");
class DALEvento {
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function Criar($evento) {
        $sql = "insert into evento(nome, data_ini, data_fim, sobre, programacao, contatos) values('";
        $sql = $sql . $evento->getNome() . "','";
        $sql = $sql . $evento->getDatainicio() . "','";
        $sql = $sql . $evento->getDatafim() . "','";
        $sql = $sql . $evento->getSobre() . "','";
        $sql = $sql . $evento->getProgramacao() . "','";
        $sql = $sql . $evento->getContatos() . "')";
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

    public function Deletar($evento) {
        $sql = "delete from evento where ";
        $sql = $sql . "nome = " . $evento->getNome() . " and ";
        $sql = $sql . "data_ini = " . $evento->getDatainicio() . " and ";
        $sql = $sql . "data_fim = " . $evento->getDatafim() . " and ";
        $sql = $sql . "sobre = " . $evento->getSobre() . " and ";
        $sql = $sql . "programacao = " . $evento->getProgramacao() . " and ";
         $sql = $sql . "contatos = " . $evento->getContatos() . ";";
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $linhas = mysqli_affected_rows($banco);
        $this->conexao->Desconectar();        
        if($linhas == 1){
            echo "<script type='text/javascript'>
                    alert('Remoção efetuada com sucesso!');
                </script>";
         }else{
            echo "<script type='text/javascript'>
                    alert('Remoção NÃO efetuada!');
                </script>";
        }
    }

}
