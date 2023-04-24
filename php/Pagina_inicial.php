<?php
    session_start();
    if ($_SESSION["profe"] == 0) {
        echo "Benvingut alumne";
    } else {
        echo "Benvingut mestre";
    }
    session_destroy();
?>