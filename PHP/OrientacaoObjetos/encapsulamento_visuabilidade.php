<?php 

class Veiculo{

	/*
	public 
	private
	protectec

	*/

	private $placa;
	private $cor;
	protected $tipo="Caminhonete";

	
	public function setPlaca($paramento_placa){

		// validação da placa

		$this->placa = $paramento_placa;
	}

	public	function getPlaca(){
			return $this->placa;
		}


	/*function setCor($Cor_carro){
		$this->cor = $Cor_carro;
	}
	function getCor(){
		return $this-$Cor_carro;
	}*/


}

$veiculo = new Veiculo();

$veiculo->setPlaca('WAL1234');

echo $veiculo->getPlaca();


// vamos Tentar Protected

class Carro extends Veiculo{

	public function exibirTipo(){
		echo $this->tipo;
	}
}

echo "<br><br><br>";
$carro = new Carro();

$carro->exibirTipo();



?>