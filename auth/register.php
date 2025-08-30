<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /php-mysql-training/signin.php");
    exit();
}

class Register
{
    private $form;

    public function __construct()
    {
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
            $errors['password'] = 'Password is required';
        } else if (strlen($password) < 8) {
            $errors['password'] = 'Password must be at least 8 characters long';
        } else if (strlen($password) > 12) {
            $errors['password'] = 'Password must not exceed 12 characters';
        } else if ($password !== $confirmPassword) {
            $errors['confirmPassword'] = 'Passwords do not match';
        }

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;

            header("Location: /php-mysql-training/signup.php");
            die();
        }

        // TODO: save to database
        $_SESSION["user"] = $this->form;

        header("Location: /php-mysql-training/signin.php");
        die();
    }
}

$process = new Register();
$process->register();
