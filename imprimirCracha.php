<?php
require_once("classes/DAOUsuario.php");	    
$con = (new DAOUsuario())->gerarCracha();
?>

<img src="img/cracha.png" alt="">
        <div style= "position: absolute; top: 340px; left: 150px;">
            <img src="QR_code.png" alt="">
        </div>