<?php 
    session_start();
    require "dbconexio.php";

    $sql = "SELECT Assignacions.id, Assignacions.idAlumne, Usuaris.nom
            FROM Usuaris
            INNER JOIN Assignacions ON Usuaris.id = Assignacions.idAlumne;";

    if (mysqli_query($conn, $sql)) { 
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <th scope="row" class="ps-4">
                        <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck1" />
                            <label class="form-check-label" for="contacusercheck1"></label></div>
                    </th>
                    <td><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="avatar-sm rounded-circle me-2" />
                            <a href="#" class="text-body"><?=$row["nom"] ?></a></td>
                    <td><span class="badge badge-soft-success mb-0"><?=$row["idAlumne"] ?></span></td>
                    <td><?php $row["id"] ?></td>
                    <td>Hola</td>
                    <td>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="px-2 text-primary">
                                    <i class="bx bx-pencil font-size-18"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="px-2 text-danger">
                                    <i class="bx bx-trash-alt font-size-18"></i></a>
                            </li>
                        </ul>
                    </td>
                <tr>
<?php 
            }
        } else {
        echo '0 results';
        } ?>
    <?php 
    } else { ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=-1">
    <?php }

    $conn->close();
?>