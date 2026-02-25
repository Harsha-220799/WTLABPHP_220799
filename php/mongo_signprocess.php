<?php
require_once __DIR__ . '/../config/mongodb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $collection = $db->users;
    if (empty($name) || empty($email) || empty($_POST['password'])) {
    echo "All fields are required ❌";
    exit();
}

if (strlen($_POST['password']) < 6) {
    echo "Password must be at least 6 characters ❌";
    exit();
}
    // check if email already exists
    $existingUser = $collection->findOne(['email' => $email]);

    if ($existingUser) {
        echo "User already exists!";
    } else {
        $collection->insertOne([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        echo "MongoDB Signup Successful ✅";
    }
}
?>