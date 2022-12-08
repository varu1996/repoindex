<?php

    $user = ($_POST ["user"]); 
    $password = $_POST ["password"];
    
    $saveUser = "potrero";
    $savePassword = 12345;
    
    if($user == $saveUser && $password == $savePassword){
        header("location: http://localhost/nivel2/tienda_ropa/index.html");
    }else{
        header("location: http://localhost/nivel2/tienda_ropa/error.html");
    }

?>