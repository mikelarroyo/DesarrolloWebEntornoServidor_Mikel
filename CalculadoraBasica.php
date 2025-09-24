<?php
// ---- Funciones ----
function suma($a, $b)
{
    return $a + $b;
}
$restaAnonima = function ($a, $b) {
    return $a - $b;
};
$multiplicacionFlecha = fn($a, $b) => $a * $b;
$divisionFlecha = fn($a, $b) => $b != 0 ? $a / $b : "Error: división por cero";

$resultado = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = (float)$_POST["num1"];
    $num2 = (float)$_POST["num2"];
    $op   = $_POST["op"];

    if ($op === "1") $resultado = suma($num1, $num2);
    if ($op === "2") $resultado = $restaAnonima($num1, $num2);
    if ($op === "3") $resultado = $multiplicacionFlecha($num1, $num2);
    if ($op === "4") $resultado = $divisionFlecha($num1, $num2);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora básica</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        background-color: #f0f0f0;
    }

    form {
        display: inline-block;
        margin-top: 20px;
        padding: 15px;
        background: #85d8caff;
        border: 1px solid #ccc;
    }

    div {
        margin: 10px 0;
    }
</style>

<body>
    <h2>CALCULADORA BÁSICA</h2>

    <form method="post">
        <div>
            <label for="num1">Número 1:</label>
            <input type="number" id="num1" name="num1" step="any" required>
        </div>

        <div>
            <label for="num2">Número 2:</label>
            <input type="number" id="num2" name="num2" step="any" required>
        </div>

        <div>
            <span>Operación:</span><br>
            <label><input type="radio" name="op" value="1" required> Suma</label>
            <label><input type="radio" name="op" value="2"> Resta</label>
            <label><input type="radio" name="op" value="3"> Multiplicación</label>
            <label><input type="radio" name="op" value="4"> División</label>
        </div>

        <div>
            <button type="submit">Calcular</button>
        </div>
    </form>

    <?php if ($resultado !== null): ?>
        <p><strong>Resultado: <?= $resultado ?></strong></p>
    <?php endif; ?>
</body>

</html>