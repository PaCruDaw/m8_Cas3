<?php 
    session_start();
    require "dbconexio.php";

    $sql = "SELECT Assignacions.id, Assignacions.idAlumne, Alumnes.nom
            FROM Alumnes
            INNER JOIN Assignacions ON Alumnes.id = Assignacions.idAlumne";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["idAlumne"]."</td>
                    <td>".$row["nom"]."</td>
                    <td>placeholder</td>
                    <td>text</td>
                </tr>
            ";
        }
    } else {
        echo "0 results";
    } 
    $conn->close();
?>