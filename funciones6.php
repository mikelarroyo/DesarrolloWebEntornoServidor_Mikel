<?php
/** Calculadora basica:
 - Funciones normales, anónimas y flecha.
 - Menú con do...while del 1 al 5 (5 = salir).
 * necesito que me valides que los dos numeros sean numeros validados
*/


function suma($a, $b) {
    return $a + $b;
}

$restaAnonima = function ($a, $b) {
    return $a - $b;
};

$multiplicacionFlecha = fn($a, $b) => $a * $b;

$divisionFlecha = fn($a, $b) => $b != 0 ? $a / $b : "Error: división por cero";



do {
    echo "\n- Calculadora --\n";
    echo "1. Suma\n";
    echo "2. Resta\n";
    echo "3. Multiplicación\n";
    echo "4. División\n";
    echo "5. Salir\n";
    echo "Elige una opción: ";
    fscanf(STDIN, "%d", $opcion);

    if ($opcion >= 1 && $opcion <= 4 ) {
        echo "Elige tu primer número: ";
        fscanf(STDIN, "%f", $num1);

        echo "Elige tu segundo número: ";
        fscanf(STDIN, "%f", $num2);
    } 

    switch ($opcion) {
        case 1:
            echo "Resultado (Suma): " . suma($num1, $num2) . "\n";
            break;
        case 2:
            echo "Resultado (Resta): " . $restaAnonima($num1, $num2) . "\n";
            break;
        case 3:
            echo "Resultado (Multiplicacion): " . $multiplicacionFlecha($num1, $num2) . "\n";
            break;
        case 4:
            echo "Resultado (Division): " . $divisionFlecha($num1, $num2) . "\n";
            break;
        default:
            echo "operacion no válida";
        }
    } while ($opcion != 5);
    ?>

 