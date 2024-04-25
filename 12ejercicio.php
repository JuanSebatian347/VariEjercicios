<?php
echo
$cat1=readline("Ingrese los lados de los catetos: ");
$cat2=readline(", ");
$hip=sqrt(($cat1*$cat1)+($cat2*$cat2));
$hip1=number_format($hip,2);
echo("La hipotenusa es: {$hip1}");
?>
