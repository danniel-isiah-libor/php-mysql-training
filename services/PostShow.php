<?php

namespace services;

include_once "../auth/BaseClass.php";

use auth\BaseClass;

class PostShow extends BaseClass
{
    public function __construct()
    {
        $this->connectDatabase();
    }

    public function getPost(int $id)
    {
        $query = "SELECT posts.id as post_id, posts.*, users.* FROM posts LEFT JOIN users ON users.id = posts.user_id WHERE posts.id = $id GROUP BY posts.id LIMIT 1";

        $post = $this->mysql->query($query)->fetch_assoc();

        unset($post['password']);

        return $post;
    }
}
