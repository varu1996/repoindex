<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel 2</title>
</head>
<body>
    <h1>Tienda de ropa</h1>

    <button type="submit"><a href="index.html">Inicio</a></button>
    <button type="submit"><a href="listar.php">Listar ropa</a></button>
    <button type="submit"><a href="agregar.html">Agregar ropa</a></button>

    <h2>Lista de ropa</h2>

    <p>La siguiente tabla muestra las prendas que se encuentran en stock.</p>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>PRENDAS</td>
            <td>MARCA</td>
            <td>TALLE</td>
            <td>PRECIO</td>
            <td>IMAGEN</td>
            <td>EDITAR</td>
            <td>BORRAR</td>
        </tr>

        <?php 

        $conexion = mysqli_connect("127.0.0.1","root","");
        mysqli_select_db($conexion,"tienda_ropa");

        $consulta = "SELECT * FROM inventario";

        // $consulta = "SELECT * FROM inventario WHERE prendas = 'buzo'";

        // $consulta = "SELECT * FROM inventario WHERE marca = 'nike'";

        // $consulta = "SELECT * FROM inventario WHERE precio > 500";

        $datos = mysqli_query ($conexion, $consulta);

        while($fila = mysqli_fetch_array($datos)){ 

        ?>

        <tr>
            <td><?php echo $fila["id"]; ?></td>
            <td><?php echo $fila["prendas"]; ?></td>
            <td><?php echo $fila["marca"]; ?></td>
            <td><?php echo $fila["talle"]; ?></td>
            <td><?php echo $fila["precio"]; ?></td>
            <td><img src="data: image/png; base64, <?php echo base64_encode($fila['imagen']); ?>"></td>
            <td><a href="modificar.php?id= <?php echo $fila['id']; ?>">Editar</a></td>
            <td><a href="borrar.php?id= <?php echo $fila['id']; ?>">Borrar</a></td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>