<?php  
 session_start();
if (isset($_SESSION["user"])): ?>
      
  <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php">
      
<?php endif; ?>


<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="https://i0.wp.com/www.silocreativo.com/wp-content/uploads/2017/09/login-wordpress.png?fit=666%2C370&quality=100&strip=all&ssl=1">
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body class="Gran">
    <div class="INICI">
      <h2>Inici de Sessio </h2>
      <?php if ($_GET["ko"]==1) {
              echo "S'ha produit un error";
            } ?>
        <form action="../php/login.php" method="post">
        <label for="username">Usuari: </label>
        <input type="text" name="username" required>
        <label for="password">Contrasenya: </label>
        <input type="password" name="password" required>
        <input type="submit" value="Login">
      </form>
  </body>
</html>
