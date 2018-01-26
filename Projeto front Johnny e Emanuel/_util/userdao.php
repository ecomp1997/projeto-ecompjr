<?php

if(!isset($_SESSION)){
    session_start();
}
//include_once( "seguranca.php" );
require_once( "bd.php" );

class UserDao {

	private $banc;
	public function __construct() {
                
	}	

	//READ
	function ler( $email, $senha ) {
		$banc = Bd::getInstance();
		$banc->abrirconexao();
		
		//$sql = pg_query( $obanco, "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}' LIMIT 1 ;" );
		
		$sql = "SELECT * FROM membro WHERE email = '{$email}' AND senha = '{$senha}';";
		$resultado = pg_query($sql);
		$login_check = pg_num_rows( $resultado );
		if($login_check == 0 ){
			$banc->fecharconexao();
			return null;
		}else{
			//$resultado = pg_query($sql2);
			$banc->fecharconexao();			
			return $resultado;
		}
		$banc->fecharconexao();
		return null;
	}
	function cadastrar($nome, $email, $senhaCrip, $cargo, $pontos, $data_nascimento){
		
		$banc = Bd::getInstance();
		$obanco = $banc->abrirconexao();
		$sql = "INSERT INTO membro(nome, email, senha, cargo, pontos, data_nascimento) VALUES ('$nome', '$email', '$senhaCrip', '$cargo', '$pontos', '$data_nascimento')";
		$result = pg_query($obanco, $sql);
		if ($result != false  ) {
			echo "Cadastrado com sucesso!";
			$banc->fecharconexao();
			return true;
		} else {
			$banc->fecharconexao();
			return false;
			echo "<script type='javascript'>alert('Cadastrado com Erro!');";
		}
			
	}
	function cadastrarProjeto($nomeEmpresa, $precoProjeto, $nomeProjeto, $dataInicial, $dataTermino, $formaPagamento, $membros){
		$banc = Bd::getInstance();
		$obanco = $banc->abrirconexao();		

		$SQL = "SELECT nome FROM membro WHERE email = '{$membros}'";
		$res = pg_query($SQL);
		$r = pg_fetch_array($res);
		$memb = $r['nome'];
		
		$sq = "INSERT INTO projeto(empresa, preco, datainicio, datatermino, pagamento, nomeprojeto, membros) VALUES ('$nomeEmpresa', '$precoProjeto', '$dataInicial', '$dataTermino', '$formaPagamento', '$nomeProjeto', '$memb')";
		$result = pg_query($obanco, $sq);
	  
		if ($result != false  ) {
			echo "Cadastrado com sucesso!";
			$banc->fecharconexao();
			return true;
		} else {
			echo "não veio nada";
			$banc->fecharconexao();
			return false;
			echo "<script type='javascript'>alert('Cadastrado com Erro!');";
		}
	}
function buscarDados(){
	$banc = Bd::getInstance();
		$obanco = $banc->abrirconexao();
		$sql = "SELECT * FROM projeto";
		$resultado = pg_query($obanco, $sql);		
		$banc->fecharconexao();
		return $resultado;
}
	//DELETE
	function apagar( $SQL ) {
		$banco = $this->conectar();
		$Resultado = pg_query( $this->conectar(), $SQL );
		pg_close( $this->conectar() );
		return $Resultado;
	}
	//SELECT
    
}
