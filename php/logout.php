<?php
    session_start();  
    echo "Fins la próxima ". $_SESSION["user"];
    //setcookie("Usuari_connexio", $_SESSION["user"], time() -3600);
    session_unset();
    session_destroy();

?>    