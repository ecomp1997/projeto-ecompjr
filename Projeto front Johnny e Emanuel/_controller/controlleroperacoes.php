<?php

include_once( "_model/segurancaA.php" );

class ControllerOperacoes{
	
	private $caminho = "";
	
	public	function __construct() {

	}
	
	
	public function setcaminho($str) {
        $this->caminho = $str;
        $DAO->setArqSaida("povoamento.sql");
    }

    public function lerlinha() {
        
			$arq = fopen ($this->caminho, 'r');
			

            $linha = fgets($arq, 1024); 
            $primeiro;
            $emQuestao = false;
            $txtQ = false;
            $txtE = false;
            $txtR = false;
            $questao = null;
            while (!feof($arq)) {
                
                echo " o conteudo da linha é " . $linha;
                if(!$linha == ""){
					$primeiro = substr($linha, 0, 1);
                }else{
                    echo "Vazio";
                    $primeiro = "";
                }
                echo "O conteudo do primeiro caractere é " . $primeiros;
                if ($primeiro == "$") {
                    echo "uma questao";
                    $txtQ = true;
                    $txtE = false;
                    $txtR = false;
                    if($emQuestao == true){
                        echo "nova questao";
                        $emQuestao = false;
                        $this->salvaSQL($questao);
                    }
                    $questao = new QuestaoSQL();
					$questao->setNome(str_replace("$", "", $linha));
                } else if ($primeiro = "#") {
                    echo "um enunciado";
                    $txtQ = false;
                    $txtR = false;
                    $txtE = true;
                }else if($primeiro == "&"){
                    echo "uma resposta";
                    $txtQ = false;
                    $txtE = false;
                    $txtR = true;
                    $questao->incrementaCont();
                }else if($primeiro == "|"){
                    echo "a resposta correta deve dar erro a seguir";
                    $questao->setRespostaCorreta(str_replace("|", "", $linha));
                    $txtQ = false;
                    $txtE = false;
                    $txtR = false;
                    $emQuestao = true;
                    $this->salvaSQL(questao);
                    $questao = new QuestaoSQL();
                }
                
                if($txtQ == true){
                    $questao->setNome(str_replace("$", "", $linha));
                }else if($txtE == true){
                    echo "uma parte do enunciado add";
                    $questao->setEnunciado(str_replace("#", "", $linha));
                }else if($txtR = true && $primeiro != "|"){
                    echo "Add uma questao";
                    if($questao->getCont() == 1){
                        echo "1 resposta";
                        $questao->setRespostaA(str_replace("&", "", $linha));
                    }else if($questao->getCont() == 2){
                        echo "2 resposta";
                        $questao->setRespostaB(str_replace("&", "", $linha));
                    }else if($questao->getCont() == 3){
                        echo "3 resposta";
                        $questao->setRespostaC(str_replace("&", "", $linha));
                    }else if($questao->getCont() == 4){
                        echo "4 resposta";
                        $questao->setRespostaD(str_replace("&", "", $linha));
                    }else if(questao.getCont() == 5){
                        echo "5 resposta";
                        $questao->setRespostaE(str_replace("&", "", $linha));
                    }else{
                        echo "Algo de errado em inserir resposta";
                    }
                }else{
                    echo "Erro " . "Questao:" . $txtQ . " Enunciado:" . $txtE . " Resposta:" . $txtR . "|" . $questao->getCont();
                }
                
				$linha = fgets($arq, 1024); 
            }
            $this->salvaSQL(questao);

            fclose($arq)/
            
       
        $DAO->closeFile();
    }
    
    private function salvaSQL($questao){
        $DAO->gerarInsert(questao);
    }
}

?>