<?php
$añoactual= date("Y");
$añonac=readline("Ingrese su año de nacimiento: ");
$edad=$añoactual-$añonac;
echo("Su edad es: {$edad}");
?>