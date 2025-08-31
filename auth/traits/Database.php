<?php

namespace auth\traits;

trait Database
{
    const TABLE_NAME = "profiles";

    protected function performQuery()
    {
        // performing database query...

        // self::TABLE_NAME;

        // SELECT STATEMENT....
        // $id = 1;

        // $query = "SELECT * FROM users WHERE id IS NULL";

        // $results = $this->mysql->query($query);

        // if ($results->num_rows > 0) {
        //     while ($row = $results->fetch_assoc()) {
        //         var_dump($row);
        //     }
        // }

        // INSERT STATEMENT....
        $password = "password";

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO users (full_name, email, password) 
        VALUES ('Jane Doe', 'janedoe@mail.test', '$hashedPassword')";

        var_dump($this->mysql->query($query));

        // UPDATE STATEMENT...
        // $query = "UPDATE users SET password='$hashedPassword' WHERE id = 1";

        // var_dump($this->mysql->query($query));

        // $query = "DELETE FROM users WHERE id = 1";

        // var_dump($this->mysql->query($query));

        return $this;
    }
}
