/** usa array filter con una funcion flecha  par obtener de un array de numeros solo los pares
*/

<?php

$numeros= [1,2,3,4,5,6,7,8];


$funcionFlecha = array_filter($numeros, fn($n)=> $n % 2 === 0);

print_r($funcionFlecha);