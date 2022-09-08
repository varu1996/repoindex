<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel 2 - Back End</title>
</head>
<body>

    <?php
    
    echo "Hola Mundo.";
    
    ?>

    <hr>

    <?php
    
    $mensaje = "Hola Mundo.";
    echo $mensaje;

    ?>

    <hr>

    <h3>Operadores lógicos.</h3>

    <?php

    $manzana = 30;
    $naranja = 15;

    $totalSuma = $manzana + $naranja;
    echo $totalSuma;

    ?>

    <br>

    <?php

    $manzana = 30;
    $naranja = 15;

    $totalResta = $manzana - $naranja;
    echo $totalResta;

    ?>

    <br>

    <?php

    $manzana = 30;
    $naranja = 15;

    $totalMultiplicacion = $manzana * $naranja;
    echo $totalMultiplicacion;

    ?>

    <br>

    <?php

    $manzana = 30;
    $naranja = 15;

    $totalDivision = $manzana / $naranja;
    echo $totalDivision;

    ?>

    <br>

    <?php

    $manzana = 30;
    $naranja = 15;

    $totalResto = $manzana % $naranja;
    echo $totalResto;

    ?>

    <hr>

    <h3>Transformación de grados Celsius a Fahrenheit.</h3>

    <?php
    
    $celsius = 20;

    $fahrenheit = $celsius * 1.8 + 32;

    echo $fahrenheit;

    ?>

    <hr>

    <h3>Rectángulo.</h3>

    <?php

    $base = 18;
    $altura = 12;

    $area = $base * $altura;
    echo $area;

    ?>

    <br>

    <?php
    
    $base = 18;
    $altura = 12;

    $perimetro = 2 * $base + 2 * $altura;
    echo $perimetro;
    
    ?>

    <hr>

    <h3>Círculo.</h3>

    <?php
    
    $radio = 30;

    $area = 3.14 * $radio * $radio;
    echo $area;
    
    ?>

    <br>

    <?php
    
    $radio = 30;

    $perimetro = 2 * 3.14 * $radio;
    echo $perimetro;
    
    ?>

</body>
</html>