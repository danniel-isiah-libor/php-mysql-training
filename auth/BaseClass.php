<?php

namespace auth;

use mysqli;

abstract class BaseClass
{
    protected $mysql;

    public function __construct()
    {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            header("Location: /php-mysql-training/signin.php");
            exit();
        }

        $serverName = "localhost";
        $username = "root";
        $password = "";
        $databaseName = "blog_app";

        $this->mysql = new mysqli($serverName, $username, $password, $databaseName);

        if ($this->mysql->connect_error) {
            die("Connection failed: " . $this->mysql->connect_error);
        }
    }

    public function __destruct()
    {
        $this->mysql->close();
    }
}
