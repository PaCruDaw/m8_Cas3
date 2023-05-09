<?php
    session_start();
    
    if (($_SESSION["profe"] == 0) && (isset($_SESSION["user"]))) {
        include "../html/capçelera_pagina_inicial.html";
        require "../html/Pagina_inicial_alumne.html";
    } else {
        if (($_SESSION["profe"] == 1) && (isset($_SESSION["user"]))) {
          header("location: Pagina_inicial_profe.php");
        } else {
          header("location:../index.php");
      }       
    }    
?>
