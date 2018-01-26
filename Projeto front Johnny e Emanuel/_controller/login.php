<?php
//arquivo de login
// session_start inicia a sessão
if(!isset($_SESSION)){
    session_start();
}
require_once( "Controllerdados.php" );
// as variáveis login e senha recebem os dados digitados na página inicial
$login = $_POST[ 'email' ];
$senha = $_POST[ 'password' ];

if (($senha != "" and $senha != null )and( $login != null and $login != "")){
	
	$controller = Controllerdados::getInstance();
	$controller->realizalogin($login, $senha);	
		
}else{	
	
	header('location:../index.php');
	
}
