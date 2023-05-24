<?php
/**
 * Fitxer que ens permet la conexio a la base de dades. 
 */
    $servername = "mariadb";
    $database = "miapp";
    $username = "alumne";
    $password = "alumne";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>