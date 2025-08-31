<?php

namespace auth\traits;

trait Database
{
    const TABLE_NAME = "profiles";

    protected function performQuery()
    {
        // performing database query...

        // self::TABLE_NAME;

        $query = "SELECT * FROM users";

        $results = $this->mysql->query($query);

        if ($results->num_rows > 0) {
            $rows = $results->fetch_assoc();

            var_dump($rows);
        }

        return $this;
    }
}
