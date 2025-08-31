<?php

namespace auth;

abstract class BaseClass
{
    public function __construct()
    {
        // if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        //     header("Location: /php-mysql-training/signin.php");
        //     exit();
        // }
    }
}
