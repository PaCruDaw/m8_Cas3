<?php 
    session_start();
    require "dbconexio.php";
    date_default_timezone_set("Europe/Madrid"); //per a que agafe correctament la zona horaria


    $id = $_POST["id"];

    
    $informacio = $_POST["informacio"];
    

    $dataOberta = date("Y-m-d");

    
    $idAlumne = $_SESSION["id"]; //es el que esta autentificat el que cree la incidencia

    $idDispositiu = $_POST["idDispositiu"];
    $idEstat = $_POST["idEstat"];

        
$sql = "INSERT INTO Incidencies (id, informacio, dataOberta, idAlumne, idDispositiu, idEstat)
        VALUES ($id, '$informacio', DATE_FORMAT('$dataOberta', '%Y-%m-%d'), '$idAlumne', '$idDispositiu', '$idEstat');";


  
    if (mysqli_query($conn, $sql)) {
       ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=1&search=1">
    <?php
    } else {
        
       ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=-1&search=1">
    <?php 
    }
   
    $conn->close();
?>
