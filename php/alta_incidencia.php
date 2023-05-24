<?php 
    session_start();
    require "dbconexio.php";

    $id = $_POST["id"];

    
    $informacio = $_POST["informacio"];
    

    $dataOberta = $_POST["dataOberta"];
    
    $dataTancada = $_POST["dataTancada"];
    
    $idAlumne = $_POST["idAlumne"];

    $idDispositiu = $_POST["idDispositiu"];
    $idEstat = $_POST["idEstat"];



        
$sql = "INSERT INTO Incidencies (id, informacio, dataOberta, dataTancada, idAlumne, idDispositiu, idEstat)
    VALUES ($id, '$informacio', DATE_FORMAT('$dataOberta', '%Y-%m-%d'), DATE_FORMAT('$dataTancada', '%Y-%m-%d'), '$idAlumne', '$idDispositiu', '$idEstat');";


  
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
