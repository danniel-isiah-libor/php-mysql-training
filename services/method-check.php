<?php
//middleware
    if($_SERVER["REQUEST_METHOD"] !== "POST")
    {
        header("Location: /php-mysql-training/signin.php");
        exit();
    }

    ?>