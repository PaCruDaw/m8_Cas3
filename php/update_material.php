<?php
 session_start();
 require "dbconexio.php"; 

$id = $_POST["id"];

$idT = $_POST["idTipus"];
if (($_POST["data"]) != "") {
    $data = $_POST["data"];
} else {
    $data = "NULL";
}

if (($_POST["etiqueta"]) != "") {
    $lavel = $_POST["etiqueta"];
} else {
    $lavel = "NULL";
}

if (($_POST["macE"]) != "") {
    $macE = $_POST["macEther"];
} else {
    $macE = "NULL";
}

if (($_POST["macW"]) != "") {
    $macW = $_POST["macWifi"];
} else {
    $macW = "NULL";
}

if (($_POST["nSerie"]) != "") {
    $nS = $_POST["nSerie"];
} else {
    $nS = "NULL";
}

if (($_POST["sace"]) != "") {
    $sace = $_POST["sace"];
} else {
    $sace = "NULL";
}


$lloc = $_POST["ubicacio"];

$sql = "UPDATE Material
        SET idTipus = $idT, etiquetaDepInf = $lavel, numSerie = $nS,  macEthernet = $macE,  macWifi = $macW,
            SACE = $sace, dataAdquisicio = $data, idUbicacio = $lloc
        WHERE id = $id"; 
         
 if (mysqli_query($conn, $sql)) {
     echo "Operacio realitzada correctament"; ?>
     <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=1&search=2">
 <?php
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>
     <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=-1&search=2">
 <?php 
 }

 $conn->close();
 
?>





