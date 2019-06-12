<?php
	if(!isset($_SESSION)){session_start();}
		if(!$_SESSION['id_usuario']){
			header("Location: login.php");
		}
		if($_SESSION['registro']){
			$segundos = time() - $_SESSION['registro'];
		}
		if($segundos > $_SESSION['limite']){
			unset($_SESSION['id_usuario'], $_SESSION['nome_completo'], $_SESSION['permissao'], $_SESSION['registro'], $_SESSION['limite']);
    		$_SESSION['msg'] = "Tempo da sessão acabou. Faça login novamente!";
    		header("Location: login.php");
		}else{
			$_SESSION['registro'] = time();
		}
?>