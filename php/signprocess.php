<?php

$conn = mysqli_connect("localhost", "root", "", "userdb",3307);

if (!$conn) {
    die("Database connection failed");
}

//clean input
$name  = trim($_POST['name']);
$email = trim($_POST['email']);
$pass  = trim($_POST['pass']);
$cpass = trim($_POST['cpass']);
//formating username 
$name = ucwords(strtolower($name));

//valid input length
if(strlen($name) < 3){
    die("Name must be at least 3 characters long");
  
}


if (strlen($pass) < 8) {
    die("Password must be at least 8 characters long!");
}

$hasLetter = false;
$hasNumber = false;
$hasSpecial = false;

for ($i = 0; $i < strlen($pass); $i++) {
    $ch = $pass[$i];

    if (ctype_alpha($ch)) {
        $hasLetter = true;
    } elseif (ctype_digit($ch)) {
        $hasNumber = true;
    } else {
        $hasSpecial = true;
    }
}

if (!$hasLetter) {
    die("Password must contain at least one letter!");
}

if (!$hasNumber) {
    die("Password must contain at least one number!");
}

if (!$hasSpecial) {
    die("Password must contain at least one special character!");
}


if ($pass != $cpass) {
   die("Passwords do not match");
    
}


$sql = "INSERT INTO user_details (name, email, pass)
        VALUES ('$name', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful<br>";
    echo "<a href='../index.php'>Go to Login</a>";
} else {
    die("Registration failed");
}


?>
