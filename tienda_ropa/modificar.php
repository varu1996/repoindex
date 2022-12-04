<?php 

    $conexion = mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tienda_ropa");

    $id = $_GET['id'];

    $consulta = "SELECT * FROM inventario WHERE id = $id";

    $respuesta = mysqli_query($conexion, $consulta);

    $datos = mysqli_fetch_array($respuesta);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel 2</title>
</head>
<body>
    <?php

        $prendas = $datos["prendas"];
        $marca = $datos["marca"];
        $talle = $datos["talle"];
        $precio = $datos["precio"];
        $imagen = $datos["imagen"];

    ?>

    <h2>Modificar</h2>
    <p>Ingrese los nuevos datos de la prenda.</p>

    <form method="POST" action="agregar.html" enctype="multipart/form-data">
        <label>Prendas</label>
        <input type="text" name="prendas" placeholder="Prendas" value=" <?php echo "$prendas"; ?>">

        <label>Marca</label>
        <input type="text" name="marca" placeholder="Marca" value=" <?php echo "$marca"; ?>">

        <label>Talle</label>
        <input type="text" name="talle" placeholder="Talle" value=" <?php echo "$talle"; ?>">

        <label>Precio</label>
        <input type="text" name="precio" placeholder="Precio" value=" <?php echo "$precio"; ?>">

        <label>Imagen</label>
        <input type="file" name="imagen" placeholder="Imagen">

        <input type="submit" name="guardar_cambios" value="Guardar cambios">

        <button type="submit" name="cancelar" formaction="index.html">Cancelar</button>
    </form>

    <?php
    
    if(array_key_exists("guardar_cambios", $_POST)){
        $conexion = mysqli_connect("127.0.0.1","root","");
        mysqli_select_db($conexion,"tienda_ropa");

        $prendas = $_POST['prendas'];
        $marca = $_POST['marca'];
        $talle = $_POST['talle'];
        $precio = $_POST['precio'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        $consulta = "UPDATE inventario SET WHERE id = $id, prendas = '$prendas', marca = '$marca', talle = '$talle', precio = $precio, imagen = '$imagen'";

        mysqli_query($conexion, $consulta);
        header('location: index.html');
    }

    ?>
</body>
</html>