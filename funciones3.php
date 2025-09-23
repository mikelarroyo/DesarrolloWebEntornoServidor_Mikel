3: Define una funcion anonima en una variable $multiplicar que multipliqie dos numeros.
Llama a la funcion usando $multiplicar(3,4)



    <?php
    
    $multiplicar = function ($a,$b){
    return $a * $b;
    };

    echo $multiplicar(3,4);