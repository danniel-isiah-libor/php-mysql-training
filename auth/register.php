<?php

namespace auth;

include_once "../auth/RegisterInterface.php";
include_once "../oop/BaseClass.php";

class Register extends BaseClass implements RegisterInterface
{
    private $form;

    public function __construct()
    {
        parent::__construct();

        session_start();

        $this->form = $_POST; // array

        foreach ($this->form as $key => $value) {
            $this->form[$key] = $this->filterData($value);
        }
    }

    private function filterData($data)
    {
        $data = htmlspecialchars(trim($data));
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
    }

    public function register()
    {
        $fullName = $this->form['fullName'];
        $email = $this->form['email'];
        $password = $this->form['password'];
        $confirmPassword = $this->form['confirmPassword'];

        $errors = [];

        // Validate full name field
        if (!isset($fullName)) {
            $errors['fullName'] = 'Full Name is required';
        } else if (strlen($fullName) > 255) {
            $errors['fullName'] = 'Full Name must not exceed 255 characters';
        }

        // Validate email field
        if (!isset($email)) {
            $errors['email'] = 'Email is required';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email is not valid';
        } // TODO: Check if email is already taken

        // Validate password field
        if (!isset($password)) {
            $errors['password'][] = 'Password is required';
        }

        if (strlen($password) < 8) {
            $errors['password'][] = 'Password must be at least 8 characters long';
        }

        if (strlen($password) > 12) {
            $errors['password'][] = 'Password must not exceed 12 characters';
        }

        if ($password !== $confirmPassword) {
            $errors['password'][] = 'Passwords do not match';
        }

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;

            header("Location: /php-mysql-training/signup.php");
            die();
        }

        // logic here.....

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO users (full_name, email, password)
        VALUES ('$fullName', '$email', '$hashedPassword')";

        $this->mysql->query($query);

        // login logic here....

        header("Location: /php-mysql-training/signin.php");
        die();
    }
}

$process = new Register();
$process->register();
