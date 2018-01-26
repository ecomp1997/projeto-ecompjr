<?php

class Bd {
	private $host = "localhost";
	private $db = "ecompjr";
	private $user = "administrador";
	private $pass = "sosenemadmin";
	public $banco;
	public $verificador = false;
	public static $instance = null;
	
	 private function __construct() {
        $this->banco = pg_connect( "host=$this->host port=5432 dbname=$this->db user=$this->user password=$this->pass" )  or die ("Erro na conexão");
		 $verificador = false;
    }
	
	public static function getInstance() {
        if (self::$instance == NULL) {
			self::$instance = new Bd();
        }
        return self::$instance;
    }
	
	public static function zeraSingleton(){
		fechaconexao();
		
		self::$instance = new Bd();
        
	}
	
	function abrirconexao() {
		if($this->verificador == false){
			if($this->banco){
				return $this->banco;
		 }else{
			echo "++Erro ao abrir conexão!<br /><br />";
			}
		}
    }
	
	function fecharconexao(){
		if($this->verificador == true){
			pg_close( $this->banco );
		}else{
			return false;
		}
	}

	public function getBanco()
    {
        return $this->banco;
    }
	
	
}


?>