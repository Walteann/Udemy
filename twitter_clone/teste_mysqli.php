<?php 

	

require_once('db.class.php');




	$sql = "SELECT * FROM usuarios ";

	$objDb = new db(); // instanciando o banco
	$link = $objDb->conecta_mysql();// chamando a função do banco conecta_mysql()



	$resultado_id = mysqli_query($link,$sql);

	if($resultado_id){

		$dados_usuario = array();

		while($linha = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)){
			$dados_usuario[] =$linha;
		}

		foreach($dados_usuario as $usuario){
			var_dump($usuario);
			echo "<br>";	
		}

		
	}else{
		echo "Erro na execução da Consulta, pF entra em Contato com o Admin";
	}

	

	


?>