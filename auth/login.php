<?php

    include_once '/services/method-check.php';

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
    if (!isset($username))
    {
        $errors['username']='Username is required';
    } else if (strlen($username) > 50)
    {
        $errors['username']='Invalid Credentials';
    }

    //Validate / Required rule password
    if (!isset($password))
    {
        $errors['username']='Invalid Credentials';
    } else if (strlen($password) < 6)
    {
        $errors['username']='Invalid Credentials';
    } else if (strlen($password) > 12)
    {
        $errors['username']='Invalid Credentials';
    }

    if (!empty($errors))
    {
        $_SESSION['errors']=$errors;
        header("Location: /php-mysql-training/signin.php");
        die();
    }

    //save to database
    if (!($form['username'] === $_SESSION['loginCreds']['username'] && $form['password'] === $_SESSION['loginCreds']['password']))
    {
        header("Location: /php-mysql-training/signin.php");
        die();
    }
    $_SESSION['user']=$_SESSION['loginCreds'];
    header("Location: /php-mysql-training/profile.php");
    // session_unset();
    // session_destroy();
    die();
?>