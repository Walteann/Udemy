<?php 

//is_array — verifica se a variavel é um array, retonar true ou false;

$array = "String";
$retorno = is_array($array);

if($retorno == true){
	echo "verdadeiro";
}else{
	echo "falso";
}

echo "<br><br>";
$array2 = array('notebook','tec,');
$retorno2 = is_array($array2);

if($retorno2 == true){
	echo "verdadeiro";
}else{
	echo "falso";
}

//in_array — verifica se tem um elemento procurando no array.
//in_array('quemEuProcuro',nomedoArray)


echo "<br><br>";
$array3 = array('notebook','tec','mac');
$retorno3 = in_array('mac',$array3);

if($retorno3 == true){
	echo "verdadeiro";
}else{
	echo "falso";
}

//array_keys — pega a chave(INDICES) do array

echo "<br><br>";

$produtos = array(10=>'notebook', 11=>'Teclado');

$chaves_array = array_keys($produtos);

var_export($chaves_array);


echo "<br><br>";
//sort — ordena um array, mas muda o indice(chaves)

$frutas = array(0=>'banana', 1=>'maça', 2=>'jambu');

sort($frutas);

var_export($frutas);

echo "<br><br>";
// asort — Ordena os arrays e junto com os indices, (chaves)

$frutas2 = array(0=>'banana', 1=>'maça', 2=>'jambu');

asort($frutas2);
var_export($frutas2);


echo "<br><br>";
//count — ela conta os elementos de um array


$frutas3 = array(0=>'banana', 1=>'maça', 2=>'jambu',3=>'goiaba');
$itens_array = count($frutas3);

echo $itens_array;

echo "<br><br>";
//array_merge -- serve pra fundir dois arrays.

$array1 = array('mac','linux');
$array2 = array('windows');
$array3 = array('solaris');


$novo_array = array_merge($array1,$array2);
var_export($novo_array);
echo "<br><br>";
var_export(array_merge($novo_array,$array3));
echo "<br><br>";


echo "<br><br>";

//explode — dividi uma string de acordo com um dilemetador

$string_teste = "20/10/2020";

$retorno4 = explode("/",$string_teste);

var_export($retorno4);

echo "<br><br>";

//implode — juntas o elementos de um array em uma string;

$nova_string_implode = implode("/",$retorno4);

echo $nova_string_implode;
echo "<br><br>";

$nova_string_implode2 = implode("-",$retorno4);

echo $nova_string_implode2;


?>