<?php
    session_start();  
    header("location: tabla_logs.php?accio=0");
    session_unset();
    session_destroy();
?>    