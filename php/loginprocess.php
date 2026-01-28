<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "userdb", 3307);

if (!$conn) {
    die("Database connection failed");
}

$email = $_POST['email'];
$pass  = $_POST['pass'];

$sql = "SELECT * FROM user_details WHERE email='$email' AND pass='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_assoc($result);

    $_SESSION['email'] = $row['email'];
    $_SESSION['name']  = $row['name'];

    header("Location: ../afterlogin.php");
    exit();

} else {
    echo "Invalid email or password<br>";
    echo "<a href='../index.php'>Try again</a>";
}
?>
