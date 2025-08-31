<?php

namespace oop;

include_once "User.php";
include_once "../oop/traits/Database.php";
include_once "../auth/traits/Database.php";

use oop\User;
use oop\traits\Database;
use auth\traits\Database as AuthDatabase;

class Profile extends User
{
    use Database;
    use AuthDatabase;

    // public $totalRecords = 2;

    function __construct($param)
    {
        // this will execute first before target method.

        parent::__construct();

        var_dump($this->totalRecords);

        echo "<br>";

        var_dump('this is from profile class');

        echo "<br>";

        var_dump("Initialization...");
        echo $param;
        echo "<br>";
    }

    function __destruct()
    {
        echo "<br>";
        var_dump("Destructing...");
    }

    public function getUserInfo()
    {
        $data = parent::getUserInfo();

        // additional logic here....

        $this->performQuery();

        return $data;
    }
}
