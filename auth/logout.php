<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: /php-mysql-training/signin.php");
    exit();
?>