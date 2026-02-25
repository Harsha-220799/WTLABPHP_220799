<?php
session_start();
require_once __DIR__ . '/../config/mongodb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $collection = $db->users;

    $user = $collection->findOne(['email' => $email]);

    if ($user && password_verify($password, $user['password'])) {
        //$_SESSION['mongo_user'] = $user['email'];
        $_SESSION['mongo_user'] = $user['email'];
        header("Location: ../mongo_dashboard.php");
        exit();
    } else {
        echo "Invalid MongoDB credentials ❌";
    }
}
?>