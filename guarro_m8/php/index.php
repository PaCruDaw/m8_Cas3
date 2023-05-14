<?php
    session_start();
   
    if ($_SESSION) {
        if ($_SESSION["profe"]==0){
            header("location: php/pagina_inicial.php");
        } 
        if ($_SESSION["profe"]==1){
            header("location: php/pagina_inicial.php");
        }     
    } else {
        include "php/index.php";
    }
    
?>      
    