<?php


require_once( "../_util/userdao.php" );


class Controllerdados {
	public static $instance = null;
	private $user;

	private	function __construct() {

	}

	public static
	function getInstance() {
		if ( self::$instance == NULL ) {
			self::$instance = new Controllerdados();
		}
		return self::$instance;
	}

	public static function zeraSingleton() {
		self::$instance = new Controllerdados();
	}
		
	public function realizalogin( $email, $senha) {
		$senhaCrip = md5($senha);			
		$userdao = new UserDao();
		$resultado = $userdao->ler( $email, $senhaCrip);

		if ( $resultado != null ) {			
			//$resultado = pg_query($sql);
			$linha = pg_fetch_array( $resultado );
			
			header('location:../_view/home.php');		
			
		} else {
			echo "erro de senha ou email";		
		}
		//echo "erro";
		//header( 'location:errologin.html' );
	}
	public function cadastrarUsuario($nome, $email, $senha, $cargo, $pontos, $data_nascimento){
		$senhaCrip = md5($senha);
		$userdao = new UserDao();
		$result = $userdao->cadastrar($nome, $email, $senhaCrip, $cargo, $pontos, $data_nascimento);

		if ( $result == true ) {			
			//$resultado = pg_query($sql);
			$linha = pg_fetch_array( $result );
			echo 'Usuario cadastrado';
			header('location:../_view/home.php');		
			
		} else {
			echo "erro no cadastro";		
		}
	}
	public function cadastrarProjeto($nomeEmpresa, $precoProjeto, $nomeProjeto, $dataInicial, $dataTermino, $formaPagamento, $membros){
		$userdao = new UserDao();
		$result = $userdao->cadastrarProjeto($nomeEmpresa, $precoProjeto, $nomeProjeto, $dataInicial, $dataTermino, $formaPagamento, $membros); 
		if ( $result != null || $result != false) {			
			//$resultado = pg_query($sql);
			
			echo 'Usuario cadastrado';
			header('location:../_view/home.php');				
			
		} else {
			echo "erro no cadastro";		
		}
	}
	public function addMembro($email, $idProjeto){
		$userdao = new UserDao();
		$result = $userdao->addMembro($email, $idProjeto);
		header('location:../_view/home.php');

	}
	public function verDadosProjeto(){
		$userdao = new UserDao();
		$result = $userdao->buscarDados();
		return $result;

	}

	
}
?>
