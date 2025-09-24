/** 4: Escribe una funcion crearMultiplicador($factor) que devuelva una funcion anonima que multiplique cualquier numero por $factor

Ejemplo: $por2 = crearMultiplicador(2); echo $por2(5);//10
*/

<?php



function crearMultiplicador($factor)
{
    return function ($n) use ($factor) {
        return $factor * $n;
    };
}



$por2 = crearMultiplicador(2);

echo $por2(5);
