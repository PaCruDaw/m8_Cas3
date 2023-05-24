<?php 
    session_start();
    require "dbconexio.php";

    $id = $_POST["id"];

    
    $idAlumne = $_POST["idAlumne"];
    

    $idEstat = $_POST["idEstat"];
    
    
    $dataTancada = $_POST["dataTancada"];
   

    $informacio = $_POST["informacio"];
    
        
    $sql = "UPDATE Incidencies
            SET idEstat = '$idEstat', dataTancada = '$dataTancada', informacio = '$informacio'
            WHERE id = $id;";

  
    if (mysqli_query($conn, $sql)) {
       ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=1&search=4">
    <?php
    } else {
        
       ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=-1&search=4">
    <?php 
    }
   
    $conn->close();
?>
