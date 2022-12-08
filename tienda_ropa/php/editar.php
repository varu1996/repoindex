<?php

$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion, "tienda_ropa");

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/editar.css">
    <title>Nivel 2 - Back End</title>
</head>
<body>

    <?php

    $prendas = $datos["prendas"];
    $marca = $datos["marca"];
    $talle = $datos["talle"];
    $precio = $datos["precio"];
    $imagen = $datos["imagen"];

    ?>

    <main>
        <h2>Modificar</h2>
        <h4>Ingrese los nuevos datos del registro que desea editar.</h4>

        <form autocomplete="off" method="POST" action="../php/guardar.php" enctype="multipart/form-data">
            <div class="form-group">

                <input type="hidden" name="id" value= <?php echo "$id"; ?>>

                <label for="">Prenda:</label>
                <input type="text" class="form-control" name="prendas" id="" placeholder="Escriba el nombre de la prenda" value=" <?php echo "$prendas"; ?>">

                <label for="">Marca:</label>
                <input type="text" class="form-control" name="marca" id="" placeholder="Escriba la marca de la prenda" value=" <?php echo "$marca"; ?>">

                <label for="">Talle:</label>
                <input type="text" class="form-control" name="talle" id="" placeholder="Escriba el talle de la prenda" value=" <?php echo "$talle"; ?>">

                <label for="">Precio:</label>
                <input type="number" class="form-control" name="precio" id="" placeholder="Escriba el precio de la prenda" value= <?php echo "$precio"; ?>>

                <label class="imagen" for="">Imagen:</label>
                <input type="file" class="form-control-file" name="imagen" id="">

                <div class="botones">
                    <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                    <button type="reset" class="btn btn-danger mb-2 btn-cancel">Cancelar</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>