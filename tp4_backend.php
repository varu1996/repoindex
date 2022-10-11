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

    print "<h2>Ejercicio 1.</h2>";

    $numbers = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];

    foreach($numbers as $elements){
        print "<p>$elements</p>";
    }

    ?>

    <hr>

    <?php
    
    print "<h2>Ejercicio 2.</h2>";

    $array = ["Pedro", "Ana", 34, 1];

    print_r($array);
    
    ?>

    <hr>

    <?php
    
    print "<h2>Ejercicio 3.</h2>";
    
    $array = ["Nombre" => 'Pedro', "Apellido" => 'Torres', "Dirección" => 'Av. Mayor 3703', "Teléfono" => '1122334455'];

    print_r($array);

    ?>

    <hr>

    <?php
    
    print "<h2>Ejercicio 4.</h2>";
    
    $cities = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

    print "<p>La ciudad con el índice 0 se llama $cities[0].</p>";
    print "<p>La ciudad con el índice 1 se llama $cities[1].</p>";
    print "<p>La ciudad con el índice 2 se llama $cities[2].</p>";
    print "<p>La ciudad con el índice 3 se llama $cities[3].</p>";
    print "<p>La ciudad con el índice 4 se llama $cities[4].</p>";
    print "<p>La ciudad con el índice 5 se llama $cities[5].</p>";
    
    ?>

    <hr>

    <?php
    
    print "<h2>Ejercicio 5.</h2>";
    
    $cities = ["MD" => 'Madrid', "BCL" => 'Barcelona', "LD" => 'Londres', "NY" => 'New York', "LA" => 'Los Ángeles', "CCG" => 'Chicago'];

    print "<p>El índice de $cities[MD] es MD.</p>";
    print "<p>El índice de $cities[BCL] es BCL.</p>";
    print "<p>El índice de $cities[LD] es LD.</p>";
    print "<p>El índice de $cities[NY] es NY.</p>";
    print "<p>El índice de $cities[LA] es LA.</p>";
    print "<p>El índice de $cities[CCG] es CCG.</p>";

    ?>

</body>
</html>