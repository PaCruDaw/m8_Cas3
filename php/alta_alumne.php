<?php 
    session_start();
    require "dbconexio.php";

    $id = $_POST["id"];

    $nom = $_POST["nom"];
    if (($_POST["nom"]) != "") {
        $nom = $_POST["nom"];
    } else {
        $nom = "NULL";
    }

    $cognom1 = $_POST["cognom1"];
    if (($_POST["cognom1"]) != "") {
        $cognom1 = $_POST["cognom1"];
    } else {
        $cognom1 = "NULL";
    }

    $cognom2 = $_POST["cognom2"];
    if (($_POST["cognom2"]) != "") {
        $cognom2 = $_POST["cognom2"];
    } else {
        $cognom2 = "NULL";
    }

    $correu = $_POST["correu"];
    if (($_POST["correu"]) != "") {
        $correu = $_POST["correu"];
    } else {
        $correu = "NULL";
    }

    $grupClase = $_POST["grupClase"];
    if (($_POST["grupClase"]) != "") {
        $grupClase = $_POST["grupClase"];
    } else {
        $grupClase = "NULL";
    }        

    $contarsenya = $_POST["contrasenya"];
    if (($_POST["contrasenya"]) != "") {
        $contarsenya = $_POST["contrasenya"];
    } else {
        $contarsenya = "NULL";
    } 

    $roll = $_POST["roll"];
    if (($_POST["roll"]) != "") {
        $roll = $_POST["roll"];
    } else {
        $roll = "NULL";
    }         
        
    $sql = "INSERT INTO Usuaris (id, nom, cognom1, cognom2, correu, grupClasse, contrasenya, roll)
                         VALUES ($id, $nom, $cognom1, $cognom2, $correu, $grupClase, $contarsenya, $roll,);";

  
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully"; ?>com
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=1&search=2">
    <?php
    } else {
        
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=-1&search=2">
    <?php 
    }
   
    $conn->close();
?>
