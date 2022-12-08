<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lista.css">
    <title>Nivel 2 - Back End</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" id="inicio" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="lista" href="lista.php">Lista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="add" href="agregar.html">Agregar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <main>
        <?php

        $conexion = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conexion, "tienda_ropa");

        $consulta = "SELECT * FROM inventario";

        $datos = mysqli_query($conexion, $consulta);

        ?>

        <table class="table table-striped ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">PRENDAS</th>
                    <th scope="col">MARCA</th>
                    <th scope="col">TALLE</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">IMAGEN</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">BORRAR</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($fila = mysqli_fetch_array($datos)) { ?>

                    <tr>
                        <td><?php echo $fila["id"]; ?></td>
                        <td><?php echo $fila["prendas"]; ?></td>
                        <td><?php echo $fila["marca"]; ?></td>
                        <td><?php echo $fila["talle"]; ?></td>
                        <td><?php echo $fila["precio"]; ?></td>
                        <td><img src="data: image/png; base64, <?php echo base64_encode($fila['imagen']); ?>"></td>
                        <!-- <td><a href="php/editar.php?id= <?php echo $fila['id']; ?>">Editar</a></td> -->
                        <!-- <td><a href="php/borrar.php?id= <?php echo $fila['id']; ?>">Borrar</a></td> -->
                        <!-- <td><button class="btn btn-primary" onclick="edit_prenda('<?php echo $fila['id']; ?>')">Editar</button></td> -->
                        <td><input type="button" onclick="location.href = 'php/editar.php?id= <?php echo $fila['id']; ?>'" value ="Editar" ></td>
                        <td><button class="btn btn-danger" onclick="elim_prenda('<?php echo $fila['id']; ?>')">Eliminar</button></td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/borrar.js"></script>
</body>
</html>