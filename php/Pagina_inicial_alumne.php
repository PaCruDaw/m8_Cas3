<?php
    session_start();
    
    if (($_SESSION["profe"] == 0) && (isset($_SESSION["user"]))) {
        echo "Benvingut alumne";
        echo "<form action = 'logout.php'>
                <button type='submit' >Logout </button>
              </form>";
    } else {
        echo "No tens acces a aquest contingut.";
        echo "<form action = '../index.php'>
                <button type='submit' >Ir a login </button>
              </form>";
    }
    
?>
