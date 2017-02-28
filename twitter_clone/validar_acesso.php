<?php 

	session_start(); 

require_once('db.class.php');

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']); //md5 é uma função que faz criptografia.  No caso é preciso coloca md5 na validação, e na hora que se o usuario se escreve. No caso, quando ele tenta autenticar, ele faz uma comparacao entre md5(senha_site) == md5(senha_banco)



	$sql = "SELECT id, usuario, email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

	$objDb = new db(); // instanciando o banco
	$link = $objDb->conecta_mysql();// chamando a função do banco conecta_mysql()

	// update true/false
	// insert true/false
	// select false/resource
	// delete true/false

	/* O mysqli_query quando for consultar( select) retorna false9quando nao consiga) ou resource, no caso do resource é possivel recuperar esse dado e coloca dentro de um array, usando o mysqli_fetch_array, OU SEJA O RETORNO DA BUSCA SE VOLTA ATRAVES DE UM RESOURCE E VC DEVE JOGA NUM ARRAY usando o mysqli_fetch_array(); 
	*/

	$resultado_id = mysqli_query($link,$sql);

	if($resultado_id){

		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){

			$_SESSION['id_usuario'] = $dados_usuario['id'];
			$_SESSION['usuario'] = $dados_usuario['usuario'];
			$_SESSION['email'] = $dados_usuario['email'];

			header('Location: home.php');

		}else{
			header('Location: index.php?erro=1');
		}
	}else{
		echo "Erro na execução da Consulta, pF entra em Contato com o Admin";
	}

	

	


?>