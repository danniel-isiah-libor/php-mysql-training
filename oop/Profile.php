<?php
    class Profile
    {
        function __construct()
        {
            var_dump("initialization");
        }

        function getUserInfo()
        {
            $data=[
                "username" => "testuser",
                "email" => "test@example.com"
            ];

            return (object) $data;
        }

        function __destruct()
        {
            var_dump("Destructing");
        }
    }
?>