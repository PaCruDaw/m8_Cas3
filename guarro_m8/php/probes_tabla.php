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
            echo '<tr>
                    <th scope="row" class="ps-4">
                        <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck1" /><label class="form-check-label" for="contacusercheck1"></label></div>
                    </th>
                    <td><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="avatar-sm rounded-circle me-2" /><a href="#" class="text-body">'.$row["nom"].'</a></td>
                    <td><span class="badge badge-soft-success mb-0">'.$row["idAlumne"],'</span></td>
                    <td>'. $row["id"].'</td>
                    <td>125</td>
                    <td>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="px-2 text-primary"><i class="bx bx-pencil font-size-18"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="px-2 text-danger"><i class="bx bx-trash-alt font-size-18"></i></a>
                            </li>
                            <li class="list-inline-item dropdown">
                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-vertical-rounded"></i></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </td>
                <tr>';
        }
    } else {
        echo "0 results";
    } 
    $conn->close();
?>