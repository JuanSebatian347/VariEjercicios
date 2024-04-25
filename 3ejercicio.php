<?php 
$vel=readline("Ingrese su velocidad en kilometros por hora (km/h): ");
$tiempo=readline("Ingrese el tiempo (h): ");
$distancia= $vel * $tiempo;
echo "La distancia recorrida es: {$distancia} km";
?>