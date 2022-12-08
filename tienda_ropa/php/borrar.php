<?php 

    $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"tienda_ropa");

    $id = $_POST['id'];

    $consulta = "DELETE FROM inventario WHERE id = $id";

    mysqli_query($conexion, $consulta);
   
    header('location: ../lista.php');
    
?>