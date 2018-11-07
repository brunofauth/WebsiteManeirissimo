<?php
    session_start();
    if (isset($_SESSION["user"])):
        session_unset();
        session_destroy();
    endif;
    header("Location: ./index.php");
?>