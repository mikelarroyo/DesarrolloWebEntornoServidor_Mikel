/**

Declara una variable $contador = 0 fuera de la funcion y una funcion incrementar que aumente $contador.
hazlo primero con global $contador
luego con $globals ("contador")
hazlo de forma que incrementar ($contador) reciba el contador como parametro y devuela el nuevo valor





*/

<?php

$contador = 0;

//usando  global $contador

function incrementarGlobal() {
    global $contador;
    $contador++;
    return $contador;
}

// 2. Usando $GLOBALS["contador"]


function incrementarGlobals() {
    $GLOBALS["contador"]++;
    return $GLOBALS["contador"];
}
echo incrementarGlobals();

//3 hazlo de forma que incrementar ($contador) reciba el contador como parametro y devuela el nuevo valor
function incrementarParametro($c) {
    $c++;
    return $c;
}

echo incrementarGlobal()."\n";
echo incrementarGlobals()."\n";
echo incrementarParametro($contador)."\n";