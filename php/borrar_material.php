<?php 
    session_start();
    require "dbconexio.php"; 

    $id=$_POST["id"];

   
    $sql = "DELETE FROM Material 
            WHERE id = $id";
            
    if (mysqli_query($conn, $sql)) {
        echo "Operacio realitzada correctament"; ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=1">
    <?php
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=-1">
    <?php 
    }

    $conn->close();
?>