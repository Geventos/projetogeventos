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
                    alert('Cadastro N�O efetuado!');
                </script>";
        }
    }

    public function Deletar($idevento) {
        $sql = "delete from evento where id_evento = ";
        $sql = $sql . $idevento . ";";
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $linhas = mysqli_affected_rows($banco);
        $this->conexao->Desconectar();        
        if($linhas == 1){
            echo "<script type='text/javascript'>
                    alert('Remo��o efetuada com sucesso!');
                    location.href='adm-eventos.php';
                </script>";
         }else{
            echo "<script type='text/javascript'>
                    alert('Remo��o N�O efetuada!');
                    location.href='adm-eventos.php';
                </script>";
        }
    }
}