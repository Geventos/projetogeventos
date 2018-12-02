<?php
require_once("classes/Conn.php");
require_once("classes/Inscrito.php");
class DAOInscrito {
    private $conexao;
    
    function __construct() {
        $this->conexao = Conn::getInstance();
    }
    
    public function Incricao($inscrito, $idevento){
        $sql = "insert into inscricao(nome_participante, cpf, id_evento) values('";
        $sql = $sql . $inscrito->getNome() . "','" . $inscrito->getCpf() . "','" . $idevento . "')";
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
        $linhas = mysqli_affected_rows($banco);        
        if($linhas == 1){
            echo "<script type='text/javascript'>
                    alert('Inscrição efetuado com sucesso!');
                    location.href='adm-eventos.php';
                </script>";
         }else{
            echo "<script type='text/javascript'>
                    alert('Inscrição NÃO efetuado!');
                    location.href='adm-eventos.php';
                </script>";
        }
    }
}
