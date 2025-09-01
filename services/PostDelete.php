<?php

namespace services;

include_once "../auth/BaseClass.php";

use auth\BaseClass;

class PostDelete extends BaseClass
{
    public function __construct()
    {
        $this->connectDatabase();

        session_start();
    }

    public function process()
    {
        $id = $_GET['id'];
        $userId = $_SESSION['user']['id'];

        $query = "DELETE FROM posts WHERE id = $id AND user_id = $userId";

        $this->mysql->query($query);

        header("Location: /php-mysql-training/dashboard.php");
        exit();
    }
}

$post = new PostDelete();
$post->process();
