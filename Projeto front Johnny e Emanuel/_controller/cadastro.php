<?php

//$bd = pg_connect("host=localhost port=5432 dbname=pbl user=lucas password=lucas") or die ("Não foi possível conectar ao servidor PostGreSQL");

require_once( '../_controller/controllerdados.php' );

if ( ( isset( $_POST[ 'nome' ] ) == false )and( isset( $_POST[ 'email' ] ) == false )and( isset( $_POST[ 'senha' ] ) == false )and( isset( $_POST[ 'password' ] ) == false ) ) {
	echo 'faltam dados';
} else {

	$nome = $_POST[ 'name' ];
	$email = $_POST[ 'email' ];
	$senha = $_POST[ 'password' ];
	$confirmaSenha = $_POST[ 'confirmPassword' ];
	$cargo = $_POST['office'];
	$pontos = $_POST['points'];
	$data_nascimento = $_POST['dateB'];

	if($senha == $confirmaSenha){
	$controller = Controllerdados::getInstance();

	$controller->cadastrarUsuario($nome, $email, $senha, $cargo, $pontos, $data_nascimento);
	}else{
		echo'Senhas diferem';
	}
}

?>