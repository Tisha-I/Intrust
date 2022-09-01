<?php
// Starting session
session_start();
 
if(isset($_SESSION["login"])){
    // Removing session data
    unset($_SESSION["login"]);
    // Destroying session
    session_destroy();
    header("Location: index.php");
}

?>