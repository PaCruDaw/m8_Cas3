<?php
               session_start();

    require "dbconexio.php";

    $user = $_POST["username"];
    $pass = md5($_POST["password"]);

    $sql = "SELECT nom, contrasenya, teacher
               FROM Alumnes WHERE nom='$user'";
    $result = $conn->query($sql);
    
    $row = $result->fetch_assoc();
    
    $usuari = $row["nom"];
    $contrasenya = $row["contrasenya"];

    if (strcmp($user,$usuari)==0) {
        if (strcmp($pass,$contrasenya)==0) {
            $_SESSION["user"] = $user;
            $_SESSION["profe"] = $row["teacher"];
        } else {
            echo "S'ha produit un error";
        }
    } else {
        echo "S'ha produit un error";
    }

    mysqli_close($conn);
    header("location: Pagina_inicial.php");
?>