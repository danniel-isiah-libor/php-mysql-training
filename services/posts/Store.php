<?php

namespace services\posts;

class Store
{
    public function __construct()
    {
        session_start();
    }

    public function process()
    {
        $form = $_POST;

        // filter form data...
        foreach ($form as $key => $value) {
            $form[$key] = htmlspecialchars($value);
            $form[$key] = trim($value);
            $form[$key] = stripslashes($value);
        }
        var_dump($form);
        $errors = [];

        // validate form data...
        if (!isset($form['title']) || empty($form['title'])) {
            $errors['title'] = 'Title is required.';
        } else if (strlen($form['title']) > 255) {
            $errors['title'] = 'Title must be less than 255 characters.';
        }

        if (!isset($form['body']) || empty($form['body'])) {
            $errors['body'] = 'Body is required.';
        } else if (strlen($form['body']) > 3000) {
            $errors['body'] = 'Body must be less than 3000 characters.';
        }

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;

            header("Location: /php-mysql-training/posts/create.php");
            exit(); // die();
        }

        // save to database...
    }
}

$store = new Store();
$store->process();
