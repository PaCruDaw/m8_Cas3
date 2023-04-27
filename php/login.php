<?php
    session_start();

    require "dbconexio.php";

    $user = $_POST["username"];
    $pass = md5($_POST["password"]);

    $sql = "SELECT id, nom, contrasenya, teacher
               FROM Alumnes WHERE nom='$user'";
    $result = $conn->query($sql);
    
    $row = $result->fetch_assoc();
    
    $usuari = $row["nom"];
    $contrasenya = $row["contrasenya"];

    if (strcmp($user,$usuari)==0) {
        if (strcmp($pass,$contrasenya)==0) {
            $_SESSION["user"] = $user;
            $_SESSION["profe"] = $row["teacher"];
            mysqli_close($conn);
            //$cookie_name = "Usuari_connexio";
            $cookie_value = $user;
            setcookie("Usuari_connexio", $cookie_value, time() + (86400));
            if ($_SESSION["profe"]==0){
                header("location: Pagina_inicial_alumne.php");
            } 
            if ($_SESSION["profe"]==1){
                header("location: Pagina_inicial_profe.php");
            }     
        } else {
            echo "S'ha produit un error";
        }
    } else {
        echo "S'ha produit un error";
    }
    mysqli_close($conn);
?>