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

        $this->validateData();

        $this->performQuery();
    }

    private function validateData()
    {
        // validate form data...
        if (!isset($this->form['title']) || empty($this->form['title'])) {
            $this->errors['title'] = 'Title is required.';
        } else if (strlen($this->form['title']) > 255) {
            $this->errors['title'] = 'Title must be less than 255 characters.';
        }

        if (!isset($this->form['body']) || empty($this->form['body'])) {
            $this->errors['body'] = 'Body is required.';
        } else if (strlen($this->form['body']) > 3000) {
            $this->errors['body'] = 'Body must be less than 3000 characters.';
        }

        if (!empty($this->errors)) {
            $_SESSION['errors'] = $this->errors;

            header("Location: /php-mysql-training/posts/create.php");
            exit(); // die();
        }

        return $this;
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
