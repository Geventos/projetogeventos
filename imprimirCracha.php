<?php
require_once("classes/DAOInscrito.php");	  
$id_inscrito = $_GET['id_participante'];  
$con = (new DAOInscrito())->gerarCracha($id_inscrito);
$nome = (new DAOInscrito())->nomeInscrito($id_inscrito);
$nomeEvento = (new DAOInscrito())->nomeEvento($id_inscrito);
?>

<img src="img/cracha2.png" alt="">

		<div style = "position: absolute; top: 188px; left: 138px;">
			
			<h2><?php echo $nome['nome_participante'];?></h2>
			<div style = "position: absolute; top: 36px; width: 1000px; left: -85px">
			<h6><?php echo $nomeEvento['nome'];?></h6>
			</div>
		</div>
        <div style= "position: absolute; top: 340px; left: 150px;">
            <img src="QR_code.png" alt="">
        </div>