<?php 
echo("Ingrese el salario diario y los dias trabajados del empleado ");
$sal=readline(" $");
$dias=readline(" ,y días ");
$pago=$sal*$dias;
$pen=$pago*0.10;
$salud=$pago*0.15;
$total=$pago-$pen-$salud;
echo("Hay que pagar al empleado $".$total);
?>