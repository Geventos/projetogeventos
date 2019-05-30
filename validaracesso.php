<?php
session_start();
require_once("classes/Conexao.php");
require_once("classes/DAOUsuario.php");
$conexao = Conexao::getInstance();
$btnlogin = print_r($_POST['btnlogin']);
if($btnlogin){
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	if((!empty($email)) and (!empty($senha))){
		$usuario = (new DAOUsuario())->login($email, $senha);
		if($usuario != 0 ){
			$tempolimite = 1800;
			$_SESSION['registro'] = time();
			$_SESSION['limite'] = $tempolimite;
			$_SESSION['id_usuario'] = $usuario['id_usuario'];
			header("Location: adm-eventos");
		}else{
			$_SESSION['msg'] = "Email e/ou senha INCORRETOS! #";
			header("Location: login");
		}
	}
}
?>
