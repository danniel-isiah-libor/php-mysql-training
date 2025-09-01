<?php
namespace oop;

use mysqli;
    abstract class BaseClass
    {
        public $mysql;
        public function __construct()
        {
            //middleware
            if($_SERVER["REQUEST_METHOD"] !== "POST")
            {
                header("Location: /php-mysql-training/signin.php");
                exit();
            }

            $env=parse_ini_file('../.env');
            $serverName = $env["DB_SERVER_NAME"];
            $username = $env["DB_USERNAME"];
            $password = $env["DB_PASSWORD"];
            $databaseName = $env["DB_NAME"];

            $this->mysql = new mysqli($serverName, $username, $password, $databaseName);
            // var_dump($this->mysql->connect_error);



        }

        public function mysql()
        {
            return $this->mysql;
        }
        
    }
?>