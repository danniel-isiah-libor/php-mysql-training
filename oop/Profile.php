<?php

include_once "User.php";

class Profile extends User
{
    function __construct($param)
    {
        // this will execute first before target method.

        var_dump("Initialization...");
        echo $param;
        echo "<br>";
    }

    protected function performQuery()
    {
        // performing database query...

        return $this;
    }

    function __destruct()
    {
        echo "<br>";
        var_dump("Destructing...");
    }
}
