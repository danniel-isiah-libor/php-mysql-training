<?php

class Profile
{

    function __construct($param)
    {
    //
    var_dump("initialization...");
    echo $param;
    echo "<br>";
    }

    function getUserInfo()
    {
        // retrieve user information from database...

        $data = [
            "username" =>"testuser",
            "email" =>"test@expample.com"
        ];

        return (object) $data;

    }
}

?>