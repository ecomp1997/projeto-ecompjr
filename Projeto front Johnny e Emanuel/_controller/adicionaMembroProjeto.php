<?php
require_once( '../_controller/controllerdados.php' );

$emailMembro = $_POST['email'];
$idProjeto = $_POST['idproject'];

$controller = Controllerdados::getInstance();
$controller->addMembro($emailMembro, $idProjeto);


?>