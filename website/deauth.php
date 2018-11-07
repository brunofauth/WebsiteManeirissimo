<?php
    session_start();
    if (isset($_SESSION["created"])):
        session_unset();
        session_destroy();
    endif;
    header("Location: ./index.php");
?>