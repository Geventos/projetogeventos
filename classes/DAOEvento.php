<?php
require_once("classes/Conexao.php");
require_once("classes/Evento.php");
class DAOEvento {
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

    public function Deletar($idevento) {
        $sql = "delete from evento where id_evento = ";
        $sql = $sql . $idevento . ";";
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $linhas = mysqli_affected_rows($banco);
        $this->conexao->Desconectar();        
        if($linhas == 1){
            echo "<script type='text/javascript'>
                    alert('Remoção efetuada com sucesso!');
                    location.href='adm-eventos.php';
                </script>";
         }else{
            echo "<script type='text/javascript'>
                    alert('Remoção NÃO efetuada!');
                    location.href='adm-eventos.php';
                </script>";
        }
    }

    public function ValidarPresenca($idevento, $idinscrito) {
        $cx = new Conexao();
        $consultadia = "select NOW()";
        $con = mysqli_query($cx->getBanco(), $consultadia);
        $linha = mysqli_fetch_array($con);

        $sql = "update inscricao set status = 'presente', datahora = '". $linha[0] . "' where id_participante = ";
        $sql = $sql . $idinscrito . " and id_evento = " . $idevento . ";";
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $linhas = mysqli_affected_rows($banco);
        $this->conexao->Desconectar();        
        if($linhas > 0){
            echo "<script type='text/javascript'>
                    alert('Presença efetuada com sucesso!');
                    location.href='validarpresenca.php?id_evento=$idevento';
                </script>";
         }else{
            echo "<script type='text/javascript'>
                    alert('Presença NÃO efetuada!');
                    location.href='validarpresenca.php?id_evento=$idevento';
                </script>";
        }
    }

    public function Atualizar($evento, $id_evento) {
        $sql = "update evento set nome ='" . $evento->getNome() . "', data_ini='" .  $evento->getDatainicio() . "', data_fim='" . $evento->getDatafim() . "', sobre= '" . $evento->getSobre() . "', programacao='" . $evento->getProgramacao() . "', contatos='" . $evento->getContatos() . "' where id_evento='" . $id_evento . "';";
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $linhas = mysqli_affected_rows($banco);
        $this->conexao->Desconectar();        
        if($linhas == 1){
            echo "<script type='text/javascript'>
                    alert('Atualização efetuada com sucesso!');
                    location.href='eventodetalhes.php?id_evento=$id_evento';
                </script>";
         }else{
            echo "<script type='text/javascript'>
                    alert('Atualização NÃO efetuada!');
                    location.href='eventodetalhes.php?id_evento=$id_evento';
                </script>";
        }
    }

     public function GerarComprovante($idevento, $idinscrito) {
        $cx = new Conexao();
        $consultadia = "select NOW()";
        $con = mysqli_query($cx->getBanco(), $consultadia);
        $linha = mysqli_fetch_array($con);

        $sql = "insert into tabela inscricao set status = 'inscrito', datahora = '". $linha[0] . "' where id_participante = ";
        $sql = $sql . $idinscrito . " and id_evento = " . $idevento . ";";
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $linhas = mysqli_affected_rows($banco);
        $this->conexao->Desconectar();        
        if($linhas > 0){
            echo "<script type='text/javascript'>
                    alert('Inscricao efetuada com sucesso!');
                    header('Location: '. comprovante_inscricao.php?id_evento=$idevento&id_participante=$id_participante');
                    exit();
                </script>";
         }else{
            echo "<script type='text/javascript'>
                    alert('Inscricao NÃO efetuada!');
                    location.href='error.php?id_evento=$idevento';
                </script>";
        }
    }

}