<?php 

//date está função serve pra que possa exibir e formatar dadas no PHP
// Y - m - d
// m = mes, d = dias, Y = ano, H-hora, h-hora, 


//Y -- Ano completo 2017
// y --  só dois digito 17

echo $data= date("d/m/Y");
echo "<br><br>";
echo $data= date("d-m-Y");
echo "<br><br>";
echo $data= date("Y-m-d");
echo "<br><br>";
echo $data = date("Y-m-d  H:i ");

//strtotime — conveter uma STRING em uma data em time
echo "<br><br>";
$data_inicial = '2015-04-02';
$data_final = '2015-04-05';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferenca_times = $time_final - $time_inicial;

echo $diferenca_times; // diferenca em segundos

$diaSegundos = 24 * 60 * 60;
$diferenca_dias = $diferenca_times/$diaSegundos;
echo "<br><br>";
echo $diferenca_dias;
?>