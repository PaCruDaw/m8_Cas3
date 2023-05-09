<?php
    session_start();

    //Pagina a la que es conecta de inici per a un alumne
    //Comprovem si es alumne i si es, carregem pagines
    //Fem redireccions, si intenten accedir a la pagina de profesor, 
    //Si es profesor el redireccione a la pagina de inici professor
    //si el usuari no te sessio redirigeix a login
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
