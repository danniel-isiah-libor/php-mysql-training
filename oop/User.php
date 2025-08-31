<?php

namespace oop;

include_once "BaseClass.php";

use oop\BaseClass;

class User extends BaseClass
{
    // public $totalRecords = 1;

    function __construct()
    {
        parent::__construct();

        var_dump("this is from user class");
    }

    /**
     * Get user information.
     * 
     * @return object
     */
    public function getUserInfo()
    {
        // retrieve user information from the database....

        // $this->performQuery();

        var_dump("Retrieving user information...");

        $data = [
            "username" => "testuser",
            "email" => "test@example.com"
        ];

        return (object) $data;
    }
}
