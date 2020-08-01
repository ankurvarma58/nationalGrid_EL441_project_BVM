<?php
    session_start();
    if (isset($_SESSION['valid']) && $_SESSION['valid'] == true) {
    
    return;
    }
    else {
        header("Location: ../login.php");
}
?>