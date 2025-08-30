<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include_once "dependencies.php"; ?>
</head>

<?php
if (isset($_SESSION['user'])) {
    // authenticated
} else {
    // unauthenticated
    header("Location: /php-mysql-training/signin.php");
    exit();
}
?>

<body>
    <h1>User Profile</h1>

    <a href="/php-mysql-training/auth/logout.php" class="rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Logout</a>

    <?php /* $user = $_SESSION["user"]; */ ?>

    <!-- <ul>
        <li>
            Full Name: <?php /* echo $user["fullName"]; */ ?>
        </li>
        <li>
            Email: <?php /* echo $user["email"]; */ ?>
        </li>
    </ul> -->

    <?php
    include_once "./oop/Profile.php";

    $profile = new Profile("this is a parameter");

    $data = $profile->getUserInfo();

    echo "<br>";
    echo $data->username;
    echo "<br>";
    echo $data->email;
    ?>
</body>

</html>