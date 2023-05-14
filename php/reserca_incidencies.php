<?php 
    session_start();
    require "dbconexio.php";

    $sql = "SELECT * 
            FROM Material";
            

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '
                <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["idTipus"].'</td>
                    <td>'.$row["idInventari"].'</td>
                    <td>'.$row["etiquetaDepInf"].'</td>
                    <td>'.$row["numSerie"].'</td>
                    <td>'.$row["macEthernet"].'</td>
                    <td>'.$row["macWifi"].'</td>
                    <td>'.$row["SACE"].'</td>
                    <td>'.$row["dataAdquisicio"].'</td>
                    <td>'.$row["idUbicacio"].'</td>
                    <td> <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="px-2 text-primary"><i class="bx bx-pencil font-size-18"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="px-2 text-danger"><i class="bx bx-trash-alt font-size-18"></i></a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ';
        }
    } else {
        echo '0 results';
    } 
    $conn->close();
?>