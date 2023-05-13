<?php 
    session_start();
    require "dbconexio.php";

    $sql = "SELECT * 
            FROM Material";
            

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["idTipus"]."</td>
                    <td>".$row["idInventari"]."</td>
                    <td>".$row["etiquetaDepInf"]."</td>
                    <td>".$row["numSerie"]."</td>
                    <td>".$row["macEthernet"]."</td>
                    <td>".$row["macWifi"]."</td>
                    <td>".$row["SACE"]."</td>
                    <td>".$row["dataAdquisicio"]."</td>
                    <td>".$row["idUbicacio"]."</td>
                    <td>placeholder</td>
                    <td>text</td> 
                </tr>
            ";
        }
    } else {
        echo '0 results';
    } 
    $conn->close();
?>