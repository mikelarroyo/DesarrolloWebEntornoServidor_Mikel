/**
2. Crea una función calcularPromedio($numeros) que reciba un array y devuelva el promedio.
Usa la funcion y guarda el resultado en una variable. Usa tipos de datos
//con funcion noorma, flecha y anonima 3 diferentes


*/

<?php


//Ejemplo con funcion normal pasando parametro

$numeros = [1, 2, 3, 4, 5];


function calcularPromedio($array)
{
    return array_sum($array) / count($array);
};

echo calcularPromedio($numeros) . "\n";

//Ejemplo funcion anonima


$anonima = function ($array) {
    return array_sum($array) / count($array);
};

echo $anonima($numeros) . "\n";

//Ejemplo funcion flecha

$flecha = fn($n) => (array_sum($n) / count($n));

echo $flecha($numeros);
