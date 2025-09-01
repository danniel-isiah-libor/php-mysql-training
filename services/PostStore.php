<?php

namespace services;

include_once "../helpers/FormFilter.php";
include_once "../auth/traits/Database.php";

use helpers\FormFilter;
use auth\traits\Database;

class PostStore extends FormFilter
{
    use Database;

    private $form;
    private $errors = [];

    public function __construct()
    {
        parent::__construct();

        session_start();

        $this->form = $_POST;
    }

    public function process()
    {
        $this->form = $this->filterData($this->form);

        $this->validateData($this->form, $this->errors);

        $this->performQuery();
    }

    protected function performQuery()
    {
        // save to database...

        $title = $this->form['title'];
        $body = $this->form['body'];
        $userId = $_SESSION['user']['id'];

        $query = "INSERT INTO posts (title, body, created_at, updated_at, user_id)
        VALUES ('$title', '$body', NOW(), NOW(), $userId)";

        $result = $this->mysql->query($query);

        if ($result === TRUE) {
            header("Location: /php-mysql-training/profile.php");

            exit();
        } else {
            $this->errors['title'] = "Internal server error";

            $_SESSION['errors'] = $this->errors;

            header("Location: /php-mysql-training/posts/create.php");
            exit(); // die();
        }
    }
}

$store = new PostStore();
$store->process();
