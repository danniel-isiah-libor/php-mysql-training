<?php

// include_once "Profile.php";

class User // extends Profile
{
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
