<?php
	session_start();
    unset($_SESSION['id_usuario'], $_SESSION['nome'], $_SESSION['email'], $_SESSION['permissao']);
    $_SESSION['msg'] = "Deslogado!";
    header("Location: ../login");
?>