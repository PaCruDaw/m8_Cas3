<?php
 /**
  * Aquest fitxer es el que comprova si existeix un usuari amb eixe nom i contrasenya a la base de dades,
  * si existeix done valor a les variables de sessió i redirecciona a la pagina principal, de produirse un error ens 
  * retorna a login i ens fa un $_GET per crear un missatge.
  */

 //Comença una nova sessio o reutilitza la sessió
    session_start();

     //Conexio al php de la base de dades
    require "dbconexio.php";

    //Definicio de la les variables usuaris i contrasenya, i la contasneya estara encriptada.
    $user = $_POST["username"];
    $pass = md5($_POST["password"]);    

    //A continuacio es fara un select de la taula usuaris el nom, la contrasenya i tambe el roll
    $sql = "SELECT id, nom, contrasenya, roll
            FROM Usuaris WHERE nom='$user'";
    //Ens donara el resultat de la cosulta anterior
    $result = $conn->query($sql);
    
    $row = $result->fetch_assoc();
    
    $usuari = $row["nom"];
    $contrasenya = $row["contrasenya"];

    if (strcmp($user,$usuari)==0) {
        if (strcmp($pass,$contrasenya)==0) {
            $_SESSION["user"] = $user;
            $_SESSION["profe"] = $row["roll"];
            $_SESSION["id"] = $row["id"];

            mysqli_close($conn); //tanquem per el redireccionament
            $cookie_value = $user;
            setcookie("Usuari_connexio", $cookie_value, time() + (86400));
            header("location: tabla_logs.php?accio=1");   
        } else {
            header("location: ../index.php?ko=1");

        }
    } else {
        header("location: ../index.php?ko=1");
 
    }

    mysqli_close($conn);
?>
   