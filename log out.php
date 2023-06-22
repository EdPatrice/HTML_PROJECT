<?php
    //to close the session
    $_SESSION = array();
    session_destroy();
    header('location: ./Log in page.php');
?>