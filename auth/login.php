<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /php-mysql-training/signin.php");
    exit();
}

include_once "../auth/BaseClass.php";

use auth\BaseClass;

class Login extends BaseClass
{
    //
}

session_start();

$form = $_POST; // array

$email = $form['email'];
$password = $form['password'];

$errors = [];

$baseClass = new Login();

$mysql = $baseClass->mysql();

$query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";

$user = $mysql->query($query)->fetch_assoc();

if ($user["email"] === $email && password_verify($password, $user["password"])) {
    // $user["password"] = null;
    unset($user["password"]);

    $_SESSION["user"] = $user;

    header("Location: /php-mysql-training/profile.php");
} else {
    $errors["email"] = "Invalid credentials";

    $_SESSION['errors'] = $errors;

    header("Location: /php-mysql-training/signin.php");
}

die();
