<?php

namespace services;

include_once "../helpers/FormFilter.php";
include_once "../auth/traits/Database.php";

use helpers\FormFilter;
use auth\traits\Database;

class PostUpdate extends FormFilter
{
    use Database;

    private $id;
    private $form;
    private $errors = [];

    public function __construct()
    {
        parent::__construct();

        session_start();

        $this->form = $_POST;
        $this->id = $_GET['id'];
    }

    public function updatePost()
    {
        $this->form = $this->filterData($this->form);

        $this->validateData($this->form, $this->errors);

        $this->performQuery();

        header("Location: /php-mysql-training/posts/show.php/?id=$this->id");
        exit();
    }

    protected function performQuery()
    {
        $title = $this->form['title'];
        $body = $this->form['body'];

        $query = "UPDATE posts SET title = '$title', body = '$body' WHERE id = $this->id";

        $this->mysql->query($query);
    }
}

$post = new PostUpdate();
$post->updatePost();
