<?php
    session_start();  
    echo "Fins la próxima ". $_SESSION["user"];
    session_unset();
    session_destroy();

?>    