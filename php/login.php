<?php
    //var_dump($_POST);
    //echo "<br>";
   

    $user = $_POST["username"];
    $pass = md5($_POST["password"]);

    $usuari = "paula";
    $contrasenya = md5("1234");

    if (strcmp($user,$usuari)==0) {
        if (strcmp($pass,$contrasenya)==0) {
            echo "Se ha registrat correctament";
        } else {
            echo "S'ha produit un error";
        }
    } else {
        echo "S'ha produit un error";
    }

?>