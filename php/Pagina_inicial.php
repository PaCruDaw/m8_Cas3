<?php
    session_start();
    
    if (($_SESSION["profe"] == 0) && (isset($_SESSION["user"]))) {
        echo "Benvingut alumne";
        echo "<form action = 'logout.php'>
                <button type='submit' >Logout </button>
              </form>";
    }
    elseif (($_SESSION["profe"] == 1) && (isset($_SESSION["user"]))) {
        echo "Benvingut mestre";
        echo "<form action = 'logout.php'>
                <button type='submit' >Logout </button>
              </form>";
    } else {
        echo "Cal fer login per accedir a aques contingut.";
        echo "<form action = '../login.html'>
                <button type='submit' >Ir a login </button>
              </form>";
    }
    
?>
