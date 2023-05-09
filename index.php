<?php
    session_start();
   
    if ($_SESSION) {
        if ($_SESSION["profe"]==0){
            header("location: php/Pagina_inicial_alumne.php");
        } 
        if ($_SESSION["profe"]==1){
            header("location: php/Pagina_inicial_profe.php");
        }     
    } else {
        include "php/index.php";
    }
    
?>      
    