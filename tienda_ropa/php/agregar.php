<?php 

    $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"tienda_ropa");

    $prendas = $_POST['prendas'];
    $marca = $_POST['marca'];
    $talle = $_POST['talle'];
    $precio = $_POST['precio'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $consulta = "INSERT INTO inventario (id, prendas, marca, talle, precio, imagen) VALUES ('', '$prendas', '$marca', '$talle', $precio, '$imagen')";

    mysqli_query($conexion, $consulta);
    
    header('location: ../lista.php');

?>