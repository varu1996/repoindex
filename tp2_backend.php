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
    
    $i = 5;

    if($i > 0){
        echo "El número $i es positivo.";
    }
    
    ?>

    <hr>

    <?php
    
    $i = 5;

    if($i > 1 && $i < 10){
        echo "El número $i es mayor que 1 y menor que 10.";
    }
    
    ?>

    <hr>

    <?php
    
    $i = 15;

    if($i < 2){
        echo "El número $i es menor que 2.";
    }else if($i > 10){
        echo "El número $i es mayor que 10.";
    }
    
    ?>

    <hr>

    <h3>La variable "numero1" es mayor que la variable "numero2".</h3>

    <?php
    
    $numero1 = 20;
    $numero2 = 10;

    $totalSuma = $numero1 + $numero2;
    echo $totalSuma;
    
    ?>

    <br>

    <?php
    
    $numero1 = 20;
    $numero2 = 10;

    $totalResta = $numero1 - $numero2;
    echo $totalResta;
    
    ?>

    <br>

    <h3>La variable "numero2" es mayor que la variable "numero1".</h3>

    <?php
    
    $numero1 = 10;
    $numero2 = 20;

    $totalMultiplicacion = $numero1 * $numero2;
    echo $totalMultiplicacion;
    
    ?>

    <br>

    <?php
    
    $numero1 = 10;
    $numero2 = 20;

    $totalDivision = $numero2 / $numero1;
    echo $totalDivision;
    
    ?>

    <br>

    <h3>La variable "numero1" es igual que la variable "numero2".</h3>

    <?php
    
    $numero1 = 10;
    $numero2 = 10;

    if($numero1 == $numero2){
        echo "Los números ingresados son iguales.";
    }
    
    ?>
    
</body>
</html>