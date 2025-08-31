<?php
    class User
    {
        function getUserInfo()
        {
            $data=[
                "username" => "testuser",
                "email" => "test@example.com"
            ];

            return (object) $data;
        }
    }
?>