/**
2. Crea una función calcularPromedio($numeros) que reciba un array y devuelva el promedio.
Usa la funcion y guarda el resultado en una variable. Usa tipos de datos
//con funcion noorma, flecha y anonima 3 diferentes


*/

<?php


/*funcion normal*/

$numeros = [2, 5, 6, 8];
function calcularPromedio($numeros): float
{
    return array_sum($numeros) / count($numeros);
}
$resultado1 = calcularPromedio($numeros);

/* Función anónima (closure) */
$promedioAnonima = function ($numeros): float {
    return array_sum($numeros) / count($numeros);
};
$resultado2 = $promedioAnonima($numeros);

//Funcion flecha

$promedioFlecha = fn($numeros): float => array_sum($numeros) / count($numeros);
$resultado3 = $promedioFlecha($numeros);

echo $resultado1."\n";
echo $resultado2."\n";
echo $resultado3."\n";

