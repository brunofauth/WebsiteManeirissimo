<?php
    if ($_POST["user"] == "bruno@bruno.bruno" && $_POST["pswd"] == "abcd1234"):
        header("Location: http://www.google.com");
    else:
        header("Location: http://www.facebook.com");
    endif;
?>