<?php
require_once("classes/Conexao.php");
require_once("classes/Evento.php");
class DAOEvento {
    private $conexao;
    
    function __construct() {
        $this->conexao = Conexao::getInstance();
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
        if($linhas == 1){
            echo "<script type='text/javascript'>
                    alert('Cadastro efetuado com sucesso!');
                    location.href='adm-eventos.php';
                </script>";
         }else{
            echo "<script type='text/javascript'>
                    alert('Cadastro NÃO efetuado!');
                    location.href='adm-eventos.php';
                </script>";
        }
    }

    public function Deletar($idevento) {
        $sql = "delete from evento where id_evento = ";
        $sql = $sql . $idevento . ";";
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $linhas = mysqli_affected_rows($banco);        
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
        $consultadia = "select NOW()";
        $con = mysqli_query($this->conexao->getBanco(), $consultadia);
        $linha = mysqli_fetch_array($con);

        $sql = "update inscricao set status = 'presente', datahora = '". $linha[0] . "' where id_participante = ";
        $sql = $sql . $idinscrito . " and id_evento = " . $idevento . ";";
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $linhas = mysqli_affected_rows($banco);        
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
        if($linhas == 1){
            echo "<script type='text/javascript'>
                    alert('Atualização Efetuada com Sucesso!');
                    location.href='eventodetalhes.php?id_evento=$id_evento';
                </script>";
         }else{
            echo "<script type='text/javascript'>
                    alert('Atualização NÃO efetuada!');
                    location.href='eventodetalhes.php?id_evento=$id_evento';
                </script>";
        }
    }

    public function Listar(){
        $consulta ="SELECT * FROM evento ORDER BY data_ini";
        $con = mysqli_query($this->conexao->getBanco(), $consulta);
        return $con;
    }

    public function Exibir($idevento){
        $consulta = "SELECT * FROM evento WHERE id_evento = $idevento limit 1";
        $con = mysqli_query($this->conexao->getBanco(), $consulta);
        $linha = mysqli_fetch_assoc($con);
        return $linha;
    }

    public function Validado($idevento){
        $consulta = "select * from inscricao where status = 'presente' and id_evento = $idevento order by time(datahora) desc limit 10;";
        $con = mysqli_query($this->conexao->getBanco(), $consulta);
        return $con;
    }

}