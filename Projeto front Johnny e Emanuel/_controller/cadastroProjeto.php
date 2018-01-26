<?php
if(!isset($_SESSION)){
    session_start();
}
require_once( '../_controller/controllerdados.php' );


$nomeEmpresa = $_POST[ 'organizationname' ];
$precoProjeto = $_POST[ 'projectPrice' ];
$nomeProjeto = $_POST[ 'projectname' ];
$dataInicial = $_POST[ 'initialDate' ];
$dataTermino = $_POST['dateLast'];
$formaPagamento = $_POST['pagamento'];
$membros = $_POST['organizationmember'];
	
if (($nomeEmpresa != "" and $nomeEmpresa != null )and( $dataTermino != null and $dataTermino != "" ) ){
    
    $controller = Controllerdados::getInstance();
    $controller->cadastrarProjeto($nomeEmpresa, $precoProjeto, $nomeProjeto, $dataInicial, $dataTermino, $formaPagamento, $membros);

} else{
    
echo 'faltam dados';
	
}



?>