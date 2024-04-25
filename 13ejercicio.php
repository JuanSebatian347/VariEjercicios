<?php 
$seg=readline("Ingrese los segundos: ");
$min=$seg/60;
$min1=number_format($min,2);
$h=$min/60;
$h1=number_format($h,2);
echo("Los segundos en minutos son; {$min1} y en horas son: {$h1}");
?>