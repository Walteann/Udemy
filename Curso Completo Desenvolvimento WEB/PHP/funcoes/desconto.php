
<?php 


require_once("funcoes_disconto.php");

$valor_total = 800.00;
$desconto = 10;
$valor_com_desconto = calcula_desconto($valor_total,$desconto);

	
?>

Valor Total:<?php echo $valor_total ?><br>
Valor Desconto:<?php echo $desconto ?><br>
Valor Total com Desconto: <?php echo $valor_com_desconto ?>

