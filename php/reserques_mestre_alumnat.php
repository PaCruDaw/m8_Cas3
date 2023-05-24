<?php 
    session_start();

    require "dbconexio.php"; 

    $alumne = $_GET["alumne"];
    $tipus = $_GET["tipus"];
    $alu = " AND Usuaris.nom ="."'".$alumne."'";
    $tip = " AND Material.idTipus =".$tipus;

    if ($alumne!="") {
        $resercaU = $alu;
    } else {
        $resercaU = "";
    }
    
    if ($tipus!="") {
        $resercaM = $tip;
    } else {
        $resercaM="";
    }
    
    if (($aula=="")&&($tip=="")) { ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php"> 
    <?php }
    

        $sql = "SELECT Assignacions.idMaterial, Material.idTipus, Usuaris.nom, Usuaris.cognom1, Usuaris.grupClasse
                FROM Assignacions
                INNER JOIN Usuaris ON Usuaris.id = Assignacions.idAlumne $resercaU
                INNER JOIN Material ON Material.id = Assignacions.idMaterial $resercaM;"; ?>
              
                    <tr >
                        <td>Id Material</td>
                        <td>Id Tipus</td>
                        <td>Nom </td>
                        <td >Cognom</td>
                        <td >Grup</td>
                    </tr>
<?php  
    if (mysqli_query($conn, $sql)) {
        $result = $conn->query($sql);
        $counter = $result->num_rows;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) { ?>
                <tr >
                    <td><?=$row["idMaterial"]?></td>
                    <td><?=$row["idTipus"]?></td>
                    <td><?=$row["nom"]?></td>
                    <td><?=$row["cognom1"]?></td>
                    <td><?=$row["grupClasse"]?></td>
                </tr>                   
            <script type="text/javascript" src="../js/modales.js"></script>
<?php  
            }
            echo '<br>';
            echo "Total de registres trobats: ".$counter;
        } else {
            echo '0 results';
        } ?>
    <?php 
    } else { 
        ?>
    
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=-1">
    <?php }

    $conn->close();
?>