<?php 

class db {

	//Host
	private $host = 'localhost';
	//usuario
	private $usuario = 'root';
	//senha
	private $senha = '';
	//banco de dados
	private $database = 'twitter_clone';


	public function conecta_mysql(){
		//Cria a conexão, usandoa função nativa do PHP
		// mysqli_connect(localização do bd, usuario de acesso, senha, banco de dado);
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		//ajusta o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($con,'utf8');

		// verificar se houve erro de conexão.
		//mysqli_connect_errno , retonar um codigo de erro, que se não FOR 0 (ZERO) indica que sim, existe erro
		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL'.mysqli_connect_error(); // mysqli_connect_error retorna a descrição do erro
		}
		return $con;

	}



}

?>