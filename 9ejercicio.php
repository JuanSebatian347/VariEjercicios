<?php
echo("Ingrese el precio del producto del cliente y luego cuantos va a comprar el cliente ");
$precio=readline(" Valor: $");
$cant=readline(" Cantidad: ");
$prod=$precio*$cant;
$iva=$prod*0.16;
$total=$prod+$iva;
echo("Precio total: $".$total);
?>