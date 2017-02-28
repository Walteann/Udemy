<?php 

require_once('db.class.php');

	$usuario =  $_POST['usuario'];
	
	$email =  $_POST['email'];
	
	$senha = md5($_POST['senha']);   //md5 é para criptografar a senha, ele gera um hash de 32 caracteres


	$objDb = new db(); // instanciando o banco
	$link = $objDb->conecta_mysql();// chamando a função do banco conecta_mysql()

	$usuario_existe = false;
	$email_existe = false;


	// verificar se o usuario já existe
	$sql = "select * from usuarios where usuario = '$usuario' ";
	if($resultado_id = mysqli_query($link,$sql)) {

		$dados_usuario =  mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){
			$usuario_existe = true;
		}

	}else{
		echo 'Erro ao tentar localizar o registro de usuario';
	}


	// verificar se o email já existe

	$sql = "select * from usuarios where email = '$email' ";
	if($resultado_id = mysqli_query($link,$sql)) {

		$dados_usuario =  mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['email'])){
			$email_existe = true;
		}

	}else{
		echo 'Erro ao tentar localizar o registro de Email';
	}

	if($usuario_existe || $email_existe){

		$retorno_get = '';

		if($usuario_existe){
			$retorno_get.= "erro_usuario=1&";
		}
		if($email_existe){
			$retorno_get.= "erro_email=1&";
		}
		header('Location: inscrevase.php?'.$retorno_get);
		die(); // mata o script. ou seja interrope a continuidade do php
	}

	
	$sql = "insert into usuarios(usuario,email,senha) values('$usuario','$email','$senha')"; //$sql é a query que criamos.

	//executar a query
	//mysqli_query(conexão, query)

	if(mysqli_query($link, $sql)){ // mysqli_retorna quando possuir um erro de sintaxe, ela retorna false, ai se pode testar. pra ter feedback ao usuario. 
		echo 'Usuário registrado com sucesso!';
	}else{
		echo 'Error ao registrar usuario';
	}


?>