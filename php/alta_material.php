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
   

    $sql = "INSERT INTO Material (id, idTipus, dataAdquisicio, etiquetaDepInf, idUbicacio, macEthernet, macWifi, numSerie, SACE)
            VALUES ($id, $idT, $data, $lavel, $lloc, $macE, $macW, $nS, $sace);";

  
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $conn->close();
?>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=1">