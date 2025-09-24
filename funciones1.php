/**

Declara una variable $contador = 0 fuera de la funcion y una funcion incrementar que aumente $contador.
hazlo primero con global $contador
luego con $globals ("contador")
hazlo de forma que incrementar ($contador) reciba el contador como parametro y devuela el nuevo valor





*/

<?php

$contador = 0;

//Ejemplo 1 con global $contador
function incrementar(){
    global $contador;
    $contador++;
    return $contador;

}
//Ejemplo 2 con GLOBALS ("contador")

$globalContador = 0;

function incrementoGlobals() {
    $GLOBALS ["globalContador"]++;
    
    return $GLOBALS ["globalContador"];    
}

// Ejemplo 3 pasando parametro contador

$parametroContador=0;

function parametro($contador){
    $contador++;
    return $contador;
}

echo incrementar(). "\n";
echo incrementoGlobals(). "\n";
echo parametro($parametroContador). "\n";

