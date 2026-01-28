<?php

$conn = mysqli_connect("localhost", "root", "", "userdb",3307);

if (!$conn) {
    die("Database connection failed");
}


$name  = $_POST['name'];
$email = $_POST['email'];
$pass  = $_POST['pass'];
$cpass = $_POST['cpass'];


if ($pass != $cpass) {
    echo "Passwords do not match";
    exit();
}


$sql = "INSERT INTO user_details (name, email, pass)
        VALUES ('$name', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful<br>";
    echo "<a href='../index.php'>Go to Login</a>";
} else {
    echo "Registration failed";
}
?>
