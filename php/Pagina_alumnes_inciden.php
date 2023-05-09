<?php
    session_start();
    
    if (($_SESSION["profe"] == 0) && (isset($_SESSION["user"]))) {
        include "../html/capçelera.html";
        include "../html/Pagina_reserca_incidencies.html";
    } else {
        if (($_SESSION["profe"] == 1) && (isset($_SESSION["user"]))) {
          header("location: Pagina_inicial_profe.php");
        } else {
          header("location: ../index.php");

      }       
    }    
?>
