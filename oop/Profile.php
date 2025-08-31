<?php
    include 'User.php';
    class Profile extends User
    {
        const TABLE_NAME = "profiles";
        function __construct()
        {
            var_dump("initialization");
        }

        protected function performQuery()
        {
            self::TABLE_NAME;
        }

        function __destruct()
        {
            var_dump("Destructing");
        }
    }
?>