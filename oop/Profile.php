<?php

include_once "User.php";
class Profile extends User
{
    const TABLE_NAME = "profiles";

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

    protected function performQuery()
    {
        // performing database query...

        self::TABLE_NAME;

        return $this;
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

        return $data;
    }
}
