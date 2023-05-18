<?php 
    session_start();
    require "dbconexio.php"; 


    $aula = $_GET["aula"];
    $tipus= $_GET["tipus"];
    $ubi = "AND Ubicacions.nom ="."'".$aula."'";
    $tip = "AND Material.idTipus =".$tipus;
    if(($aula!="")&&($tipus=="")) {
        $reserca = $ubi;
    } else if (($aula=="")&&($tipus!="")) {
        $reserca = $tip;
    } else if (($aula!="")&&($tipus!="")) {
        $reserca = $ubi.$tip;

    } 

    
    $sql = "SELECT Material.id, Material.idTipus, Ubicacions.nom
            FROM Material
            INNER JOIN Ubicacions ON Ubicacions.id = Material.idUbicacio $reserca;";
            ?>
                    
                <tr >
                    <td>Id Material</td>
                    <td>Id Tipus</td>
                    <td>Nom Ubicacio</td>
                </tr>

    <?php if (mysqli_query($conn, $sql)) {
        $result = $conn->query($sql);
        $counter = $result->num_rows;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) { ?>
                    <tr >
                        <td><?=$row["id"]?></td>
                        <td><?=$row["idTipus"]?></td>
                        <td><?=$row["nom"]?></td>
                    </tr>                
        <script type="text/javascript" src="../js/modales.js"></script>
<?php  
          
            }
            echo '<br>';
            echo "Total de registres trobats: ".$counter;
        } else {
            echo '0 results';
        } ?>
    <?php } else { ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=-1">
    <?php }

    $conn->close();
?>