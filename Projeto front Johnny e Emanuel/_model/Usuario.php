<?php
/**
 * User: Alyson
 * Date: 07/12/2017
 * Time: 14:57
 */

class Usuario{
	private $id;
    private $nome;
    private $sobrenome;
    private $foto;
	private $email;
    private $dataplano;
	private $privilegio;
    private $senha;

    /**
     * Usuario constructor.
     * @param $nome
     * @param $sobrenome
     * @param $sexo
     * @param $dataNascimento
     * @param $cpf
     */
    public function __construct($nome, $sobrenome, $foto, $email, $dataplano, $privilegio, $senha){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
		$this->foto = $foto;
		$this->email = $email;
		$this->dataplano = $dataplano;
		$this->privilegio = $privilegio;
		$this->senha = $senha;
    }

	
	
	
    /**
     * @return mixed
     */
    public function getNome(){
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome){
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSobrenome(){
        return $this->Sobrenome;
    }

    /**
     * @param mixed $Sobrenome
     */
    public function setSobrenome($Sobrenome){
        $this->Sobrenome = $Sobrenome;
    }

    /**
     * @return mixed
     */
    public function getId(){
        return $this->id;
    }
	
	public function setId($id){
		$this->id = $id;
	}

    public function getFoto(){
		return $this->foto;
	}
	
	public function setFoto($foto){
		$this->foto = $foto;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getDataplano(){
		return $this->dataplano;
	}
	
	public function setDataplano($dataplano){
		$this->dataplano = $dataplano;
	}
	
	public function getPrivilegio(){
		return $this->privilegio;
	}
	
	public function setPrivilegio($privilegio){
		$this->privilegio = $privilegio;
	}
	
	public function getSenha(){
		return $this->senha;
	}
	
	public function setSenha($senha){
		$this->senha = $senha;
	}


}
?>