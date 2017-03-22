<?php 
	
	session_start();

	if(!isset($_SESSION['usuario'])){
	header('Location: index.php?erro=1');
	}



	require_once('db.class.php');
	$texto_tweet = $_POST['texto_tweet'];

	$id_usuario = $_SESSION['id_usuario'];


	if($texto_tweet == '' || $id_usuario == ''){

		Die();
	}

	$objDb = new db(); // instanciando o banco
	$link = $objDb->conecta_mysql();// chamando a função do banco conecta_mysql()
	$sql = "INSERT INTO tweet(id_usuario, tweet) values($id_usuario, '$texto_tweet') ";
	mysqli_query($link,$sql);
	



	?>