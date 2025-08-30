<?php
include_once './services/method-check.php';

    session_start();

    $form = $_POST;
    // var_dump($form);
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
    $email=$form["email"];
    $password=$form["password"];
    $confirmpassword=$form["confirmpassword"];

    

    $errors=[];
    $loginCreds=[];

    //Validate / Required rule username
    if (!isset($username))
    {
        $errors['username']='Username is required';
    } else if (strlen($username) > 50)
    {
        $errors['username']='Username must not exceed 50 characters';
    }

    //Validate / Required rule email
    if (!isset($email))
    {
        $errors['email']='Email Address is required';
    } else if (!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $errors['email']='Email Address is not valid';
    }

    //Validate / Required rule password
    if (!isset($password))
    {
        $errors['password']='Password is required';
    } else if (strlen($password) < 6)
    {
        $errors['password']='Password must be at least 6 characters';
    } else if (strlen($password) > 12)
    {
        $errors['password']='Password must must no exceed 12 characters';
    }
    else if ($password !== $confirmpassword)
    {
        $errors['confirmpassword']='Confirm password does not match';
    }

    if (!empty($errors))
    {
        $_SESSION['errors']=$errors;
        header("Location: /php-mysql-training/signup.php");
        die();
    }

    //save to database

    $loginCreds['username']=$form['username'];
    $loginCreds['password']=$form['password'];

    $_SESSION['loginCreds']=$loginCreds;

    header("Location: /php-mysql-training/signin.php");
    // session_unset();
    // session_destroy();
    die();
?>