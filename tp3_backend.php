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

    print "<h2>Mostrar los números del 1 al 100.</h2>";

    print "<h3>Inicio.</h3>";

    for($i = 1; $i < 101; $i++){
        echo "<p>$i</p>";
    }

    print "<h3>Final.</h3>";

    ?>

    <hr>

    <?php

    print "<h2>Mostrar los números del 100 al 1.</h2>";
    
    print "<h3>Inicio.</h3>";

    for($i = 100; $i > 0; $i--){
        echo "<p>$i</p>";
    }

    print "<h3>Final.</h3>";
    
    ?>

    <hr>

    <?php
    
    print "<h2>Mostrar los números pares del 1 al 100.</h2>";

    print "<h3>Inicio.</h3>";

    for($i = 0; $i < 101; $i = $i + 2){
        echo "<p>$i</p>";
    }

    print "<h3>Final.</h3>";
    
    ?>

    <hr>

    <?php
    
    print "<h2>Mostrar los números impares del 1 al 100.</h2>";

    print "<h3>Inicio.</h3>";

    for($i = 1; $i < 101; $i = $i + 3){
        echo "<p>$i</p>";
    }

    print "<h3>Final.</h3>";

    ?>

    <hr>

    <?php

    print "<h2>Mostrar la suma de los números del 1 al 20.</h2>";

    print "<h3>Inicio.</h3>";

    $result = 0;

    for($i = 0; $i < 21; $i++){
        $result = $result + $i;

        echo "<p>" . "I: " . $i . " - Total: " . $result . "</p>";
    }

    print "<h3>Final.</h3>";

    ?>

    <hr>

    <?php

    print "<h2>Mostrar la suma de los números pares del 1 al 20.</h2>";

    print "<h3>Inicio.</h3>";

    $result = 0;

    for($i = 0; $i < 21; $i = $i + 2){
        $result = $result + $i;
        
        echo "<p>" . "I: " . $i . " - Total: " . $result . "</p>";
    }

    print "<h3>Final.</h3>";

    ?>

</body>
</html>