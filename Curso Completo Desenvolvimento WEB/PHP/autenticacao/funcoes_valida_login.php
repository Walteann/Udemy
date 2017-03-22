<?php 
	

	function valida_login($login, $senha){
		//Validar direto em um banco de Dados.

		$login_bd = 'wal.silva';
		$senha_bd = '132';

		if($login == $login_bd && $senha == $senha_bd){
			return true;
		}
		return false;
	}



?>