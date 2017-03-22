<?php 

	class Pessoa{

		//atributos

		var $nome;

		// metodos getters e setters

		function setNome($nome_difinido){
			$this->nome = $nome_difinido;
		}

		function getNome(){
			return $this->nome;
		}
	}

	$pessoa = new Pessoa(); // instanciação da classe

	$pessoa->setNome('Walteann');

	echo $pessoa->getNome();

?>