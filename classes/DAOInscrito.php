<?php
require_once("classes/Conexao.php");
require_once("classes/Inscrito.php");
class DAOInscrito {
    private $conexao;
    
    function __construct() {
        $this->conexao = Conexao::getInstance();
    }
    
    public function inscricao($inscrito, $idevento){
        $sql = "insert into inscricao(nome_inscrito, email_inscrito, cpf_inscrito, instituicao_inscrito, id_evento) values('";
        $sql = $sql . $inscrito->getNome() . "','";
        $sql = $sql . $inscrito->getEmail() . "','";
        $sql = $sql . $inscrito->getCpf() . "','";
        $sql = $sql . $idevento->getInstituicao . "','" . $idevento . "')";
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $linhas = mysqli_affected_rows($banco);        
        if($linhas == 1){
            echo "<script type='text/javascript'>
                    alert('Inscrição efetuado com sucesso!');
                    location.href='evento.php?id_evento=$idevento';
                </script>";
         }else{
            echo "<script type='text/javascript'>
                    alert('Inscrição NÃO efetuado!');
                    location.href='evento.php?id_evento=$idevento';
                </script>";
        }
    }

    public function listarInscrito($id_evento){
        $consulta ="SELECT * FROM inscricao WHERE id_evento = $id_evento";
        $con = mysqli_query($this->conexao->getBanco(), $consulta);
        return $con;
        mysqli_close($this->conexao);
    }

     public function gerarCracha($id_inscrito){
        include('phpqrcode/qrlib.php');
        QRcode::png($id_inscrito, "QR_code.png", QR_ECLEVEL_L , 5.5);
    }


    public function nomeInscrito($id_inscrito){
        $consulta = "SELECT nome_participante FROM inscricao WHERE id_participante = $id_inscrito ";
        $con = mysqli_query($this->conexao->getBanco(), $consulta);
        $nome = mysqli_fetch_assoc($con);
        return $nome;
    }

    public function nomeEvento($id_inscrito){
        $consulta = "SELECT nome FROM evento WHERE id_evento =(SELECT id_evento FROM inscricao WHERE id_participante = $id_inscrito)";
        $con = mysqli_query($this->conexao->getBanco(), $consulta);
        $nomeEvento = mysqli_fetch_assoc($con);
        return $nomeEvento;
    }

    public function exibirInscrito($id_inscrito){
        $consulta = "SELECT * FROM inscrito WHERE id_inscrito = $id_inscrito limit 1";
        $inscrito = mysqli_query($this->conexao->getBanco(), $consulta);
        $retorno = mysqli_fetch_assoc($inscrito);
        return $retorno;
    }
}
