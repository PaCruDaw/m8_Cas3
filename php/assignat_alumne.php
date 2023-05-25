<?php 
    session_start();
    require "dbconexio.php";

    $idA = $_SESSION["id"];

    $sql = "SELECT Assignacions.id, Assignacions.idAlumne, Usuaris.nom
            FROM Usuaris
            INNER JOIN Assignacions ON Usuaris.id = Assignacions.idAlumne AND Usuaris.id = $idA;";

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