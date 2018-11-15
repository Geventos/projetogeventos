<?php
session_start();
require_once("classes/Conexao.php");
$cx = new Conexao();
$btnlogin = $_POST['btnlogin'];
if($btnlogin){
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	if((!empty($email)) and (!empty($senha))){
		$sql = "select id_usuario, nome_completo, email, senha, permissao from usuario where email = '$email' limit 1";
		$consulta = mysqli_query($cx->getBanco(), $sql);
		if($consulta){
			$linha = mysqli_fetch_assoc($consulta);
			$linha['senha'];
			if(($senha == $linha['senha'])){
				$tempolimite = 1800;
				$_SESSION['registro'] = time();
				$_SESSION['limite'] = $tempolimite;
				$_SESSION['nome_completo'] = $linha['nome_completo'];
				$_SESSION['id_usuario'] = $linha['id_usuario'];
				$_SESSION['permissao'] = $linha['permissao'];
				header("Location: adm-eventos.php");
			}else{
				$_SESSION['msg'] = "Email e/ou senha INCORRETOS! #";
				header("Location: login.php");
			}
		}else{
			$_SESSION['msg'] = "Email e/ou senha INCORRETOS! *";
			header("Location: login.php");
		}
	}else{
		$_SESSION['msg'] = "Página não econtrada";
		header("Location: login.php");
	}
}
?>
