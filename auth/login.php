<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /signin.php");
    exit();
}

session_start();

$form = $_POST; // array

$email = $form['email'];
$password = $form['password'];

$errors = [];

$user = $_SESSION["user"];

if ($user["email"] === $email && $user["password"] === $password) {
    header("Location: /profile.php");
} else {
    $errors["email"] = "Invalid credentials";

    $_SESSION['errors'] = $errors;

    header("Location: /signin.php");
}

die();
