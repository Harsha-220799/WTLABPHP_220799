<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "userdb", 3307);

if (!$conn) {
    die("Database connection failed");
}
//clean input 

$email =trim($_POST['email']);
$pass  = trim($_POST['pass']);

//validation email by len
if(strlen($email) < 5 || strlen($email) > 50){
    die("Invalid email length");
}

$sql = "SELECT * FROM user_details WHERE email='$email' AND pass='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_assoc($result);

    if (strcasecmp($email, $row['email']) != 0) {
        die("Email mismatch");
    }

    // Password → case-sensitive
    if (strcmp($pass, $row['pass']) != 0) {
        die("Incorrect password");
    }

    $_SESSION['email'] = $row['email'];
    $_SESSION['name']  = $row['name'];

    echo "Login successful! <br>";
    print "Welcome, " . $row['name'];

    header("Location: ../afterlogin.php");
    exit();

} 
else {
    echo "Invalid email or password<br>";
    print "<a href='../index.php'>Try again</a>";
}
?>
