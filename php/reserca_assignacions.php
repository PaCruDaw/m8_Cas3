<?php 
    session_start();
    require "dbconexio.php";

    $sql = "SELECT *
            FROM Assignacions";

    if (mysqli_query($conn, $sql)) { 
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?=$row["id"]?></td>
                    <td><?=$row["idAlumne"]?></td>
                    <td><?=$row["idMaterial"]?></td>
                    <td><?=$row["dataInici"]?></td>
                    <td><?=$row["dataFinal"]?></td>
                    <td > 
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="formulari_edicio_alumne.php?id=<?= $row['id']?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="px-2 text-primary" ><i class="bx bx-pencil font-size-18"></i></a>
                            </li>
                            <li class="list-inline-item"  >
                                <a href="#" class="px-2 text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="<?= $row['id']; ?>">
                                    <i class="bx bx-trash-alt font-size-18"></i>
                                </a>                        
                                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="#deleteModalLabel">Borrar Registre?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Esta a punt de borrar un registre de la base de dades.
                                    </div>
                                    <div class="modal-footer">
                                        <form action = "borrar_assignacions.php" method ="post"> 
                                            <input type="hidden" name ="id" id="id" >
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar
                                            </button>
                                            <button  type="submit" class="btn btn-primary" >Continuar</button> 
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>
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