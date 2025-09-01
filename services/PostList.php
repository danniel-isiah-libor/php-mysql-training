<?php

namespace services;

use auth\BaseClass;

class PostList extends BaseClass
{
    public function __construct()
    {
        $this->connectDatabase(parse_ini_file('.env'));
    }

    public function getPosts()
    {
        $posts = [];

        $query = "SELECT posts.id as post_id, users.*, posts.* FROM `posts` LEFT JOIN users ON users.id = posts.user_id GROUP BY posts.id";

        $results = $this->mysql->query($query);

        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                unset($row['password']);
                $posts[] = $row;
            }
        }

        return $posts;
    }
}
