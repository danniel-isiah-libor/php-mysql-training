<?php
if (isset($_SESSION['user'])) {
    // authenticated
} else {
    // unauthenticated
    header("Location: /php-mysql-training/signin.php");
    exit();
}
?>