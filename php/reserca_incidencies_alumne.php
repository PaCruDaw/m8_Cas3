<?php 
    session_start();
    require "dbconexio.php";

    $idA = $_SESSION["id"];

    $sql = "SELECT *
            FROM Incidencies
            WHERE idAlumne = $idA";
            

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $counter = $result->num_rows;

        // output data of each row
        while ($row = $result->fetch_assoc()) { ?>
                <tr >
                    <td><?=$row["id"]?></td>
                    <td><?=$row["idDispositiu"]?></td>
                    <td><?=$row["idEstat"]?></td>
                    <td><?=$row["dataOberta"]?></td>
                    <td><?=$row["dataTancada"]?></td>                    
                    <td><?=$row["informacio"]?></td>
                </tr>

                
    <script type="text/javascript" src="../js/modales.js"></script>

<?php  
        }
        echo '<br>';
            echo "Total de registres trobats: ".$counter;
    } else {
        echo '0 results';
    } 
    $conn->close();
?>