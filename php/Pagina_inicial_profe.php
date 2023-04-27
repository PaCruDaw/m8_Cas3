<?php
    session_start();
    
    if (($_SESSION["profe"] == 1) && (isset($_SESSION["user"]))) {
      include "../html/capçelera.html";
      include "../html/Pagina_inicial_profe.html";
    } else {
        if (($_SESSION["profe"] == 0) && (isset($_SESSION["user"]))) {
          header("location: Pagina_inicial_alumne.php");
        } else {
          echo "No tens acces a aquest contingut.";
          echo "<form action = '../index.php'>
                <button type='submit' >Ir a login </button>
                </form>";
        }
    }
?>
