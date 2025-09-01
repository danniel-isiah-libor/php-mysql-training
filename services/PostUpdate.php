<?php

namespace services;

include_once "../auth/BaseClass.php";

use auth\BaseClass;

class PostUpdate extends BaseClass
{
    public function updatePost($id, $data)
    {
        $title = $data['title'];
        $body = $data['body'];

        $query = "UPDATE posts SET title = '$title', body = '$body' WHERE id = $id";

        $this->mysql->query($query);
    }
}
