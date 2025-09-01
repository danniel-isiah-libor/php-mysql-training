<?php

    include_once '../services/method-check.php';
    include_once "../oop/BaseClass.php";

    use oop\BaseClass;

    class Login extends BaseClass
    {
        //
    }
    session_start();

    $form = $_POST;

    foreach ($form as $key => $value)
    {
        $form[$key]=filterData($value);
    }

    function filterData($data)
    {
        $data = htmlspecialchars(trim($data));
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
    }

    $username=$form["username"];
    $password=$form["password"];
    
    $errors=[];

    //Validate / Required rule username
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
    // session_unset();
    // session_destroy();
    die();
?>