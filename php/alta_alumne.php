<?php 
    session_start();
    require "dbconexio.php";

    $id = $_POST["id"];

    
    $nom = $_POST["nom"];
    

    $cognom1 = $_POST["cognom1"];
    
   
    $cognom2 = $_POST["cognom2"];
    
    $correu = $_POST["correu"];

    $grupClasse = $_POST["grupClasse"];
    

    if (($_POST["contrasenya"]) != "") {
        $contrasenya = MD5($_POST["contrasenya"]);
    } else {
        $contrasenya = "NULL";
    } 

    if (($_POST["roll"]) != "") {
        $roll = $_POST["roll"];
    } else {
        $roll = "NULL";
    }         
        
    $sql = "INSERT INTO Usuaris (id, nom, cognom1, cognom2, correu, grupClasse, contrasenya, roll)
            VALUES ($id, '$nom', '$cognom1', '$cognom2', '$correu', '$grupClasse','$contrasenya', $roll);";

  
    if (mysqli_query($conn, $sql)) {
       ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=1&search=3">
    <?php
    } else {
        
       ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=-1&search=3">
    <?php 
    }
   
    $conn->close();
?>
