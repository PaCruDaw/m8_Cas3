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

    if (($_POST["nom"]) != "") {
        $lavel = $_POST["nom"];
    } else {
        $lavel = "NULL";
    }
    
    if (($_POST["cognom1"]) != "") {
        $macE = $_POST["cognom1"];
    } else {
        $macE = "NULL";
    }

    if (($_POST["cognom2"]) != "") {
        $macW = $_POST["cognom2"];
    } else {
        $macW = "NULL";
    }

    if (($_POST["correu"]) != "") {
        $nS = $_POST["correu"];
    } else {
        $nS = "NULL";
    }

    if (($_POST["grupClasse"]) != "") {
        $sace = $_POST["grupClasse"];
    } else {
        $sace = "NULL";
    }
    if (($_POST["contrasenya"]) != "") {
        $sace = $_POST["contrasenya"];
    } else {
        $sace = "NULL";
    }
    if (($_POST["roll"]) != "") {
        $sace = $_POST["roll"];
    } else {
        $sace = "NULL";
    }

   
   

    $sql = "INSERT INTO Usuaris (id, idTipus, nom, cognom1, cognom2, correu, grupClasse, contrasenya, roll)
            VALUES ($id, $idT, $data, $lavel, $lloc, $macE, $macW, $nS, $sace);";

  
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully"; ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=1&search=2">
    <?php
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=-1&search=2">
    <?php 
    }

    $conn->close();
?>
