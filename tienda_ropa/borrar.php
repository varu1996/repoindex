<?php 

    $conexion = mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tienda_ropa");

    $id = $_GET['id'];

    $consulta = "DELETE FROM inventario WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header('location: index.html');

?>