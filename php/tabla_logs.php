<?php 
    session_start();
    require "dbconexio.php";

    date_default_timezone_set("Europe/Madrid"); //per a que agafe correctament la zona horaria

    $ip = getenv('REMOTE_ADDR');
    $nav = get_browser_name($_SERVER['HTTP_USER_AGENT']);

    $fecha_actual = date("Y-m-d H:i:s");
    $iduser = $_SESSION["id"];
    $accio = $_GET["accio"]; 

    $sql = "INSERT INTO logs (tipusNavegador, ipRemota, idUsuari, horaAcces, accio)
            VALUES ('$nav', '$ip', $iduser, '$fecha_actual', $accio);";

    if (mysqli_query($conn, $sql)) {
        if ($_GET["accio"] == 1) { 
            $conn->close();?>
            <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php"> 
        <?php } elseif ($_GET["accio"] == 0) { 
            $conn->close();?>
                <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=logout.php"> 
        <?php } else {
            $conn->close();
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    
    
//funcio per guardar nom navegador    
function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
    
    return 'Other';
}


?>