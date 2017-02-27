<?php 
// ***************** FORMATAÇÂO DE STRING *********************
//strtolower  — converte as strings em minusculo.
$texto = "Curso Completo de PHP <br><br>";

echo strtolower($texto);

//strtoupper — converter as strings em MAIUSCULO

echo strtoupper($texto);

//ucfirst — deixa somente a primeiro caracter  da String MAIUSCULA, se for espaço, sera espaço
$texto2 = "todas as letras estao em minusculas <br><br>";

echo ucfirst($texto2);

//************* MANIPULAÇÃO DE STRING ******************

// strlen — mostra o comprimento da string. ( string length). tbm conta os espaços.
echo "<br><br>";

$texto3 = "Walteann Costa";

echo strlen($texto3);

echo "<br>";
?>
<!-- UTILZANDO O strlen na prática-->

<?php 
							// \/operador ternario aki!

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '' ;
$total_string_cpf = strlen($cpf);

if($total_string_cpf !=11 && $cpf !=''){
	echo "CPF Inválido";
}


?>

<form method="post" action="">
	<label>
		CPF:
		<input type="text" name="cpf">
	</label>
		<input type="submit" name="cadastrar">
</form>


<br><br>

<?php

// str_replace — substitui uma string por outra.

//str_replace(search, replace, variavel);

$texto4 = "R$ 12.40";

echo str_replace(".",",", $texto4);

echo "<br> removendo Pontos e - do CPF ";
echo " 123.456.789-10<br><br>";

$cpf2 = "123.456.789-10";

$cpf_sem_ponto = str_replace(".","", $cpf2);

$cpf_sem_traco = str_replace("-","",$cpf_sem_ponto);

echo "<br><br>".$cpf_sem_traco;

 ?>
<br>

 <?php 

 // substr — retorna parte de uma String

 $texto_exemplo = "Entenda porque seu smartphone esquenta tanto, se você tem um smartphone.";

 // substr(variavel, caracter de inicio, quantade de caracteres);

 $noticia =  substr($texto_exemplo, 0, 44);

 echo $noticia."...";
 ?>