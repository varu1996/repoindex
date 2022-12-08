<?php

    $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"tienda_ropa");
    
    echo '<BR>'. ' ID = '.$_POST['id'];

    $id = $_POST['id'];
    $prendas = $_POST['prendas'];
    $marca = $_POST['marca'];
    $talle = $_POST['talle'];
    $precio = $_POST['precio'];
    //$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    // echo '<BR>'. ' P = '.$_POST['prendas'];
    // echo '<BR>'. ' M = '.$_POST['marca'];
    // echo '<BR>'. ' T = '.$_POST['talle'];
    // echo '<BR>'. ' PR = '.$_POST['precio'];
    
    $consulta = "UPDATE inventario SET  prendas = '$prendas', marca = '$marca', talle = '$talle', precio ='$precio'
    WHERE id = $id";
    
    if(!mysqli_query($conexion, $consulta)){
        echo '<BR>'.$consulta;
        echo '<BR>'.mysqli_errno($conexion) . ": " . mysqli_error($conexion) . "\n";
    };
    
    header('location: ../lista.php');

?>