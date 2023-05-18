<?php 
    session_start();
    require "dbconexio.php"; 

    $id=$_POST["id"];

   
    $sql = "DELETE FROM Material 
            WHERE id = $id";
            
    if (mysqli_query($conn, $sql)) { ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=1&search=2">
    <?php
    } else { ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=-1&search=2">
    <?php 
    }

    $conn->close();
?>