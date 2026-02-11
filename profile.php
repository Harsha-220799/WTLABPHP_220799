<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Online Examination System - Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
    <h1>Online Examination System</h1>
    <p>Smart • Secure • Simple</p>
</header>
<nav class="navbar">
    <a href="afterlogin.php">Home</a>
    <a href="#dashboard">Dashboard</a>
    <a href="editprofile.php">Edit-Profile</a>
    <a href="index.php">Logout</a>
</nav>
<section class="section">
    
    <h2>User Profile</h2><br>
    <p>Name: <?php echo $_SESSION['name']; ?></p>
    <p>Email: <?php echo $_SESSION['email']; ?></p>

    <p>Enrolled Courses: HTML, Python, C Programming</p>
</section>

<section id="dashboard" class="section">
    <h2>Dashboard</h2>
    <div class="cards">
        <div class="card">
            <h3>HTML</h3>
            <p>written exams: 2</p>
        </div>
        <div class="card">
            <h3>C Programming</h3>
            <p>You have completed 5 exams.</p>
        </div>
        <div class="card">
            <h3>Python</h3>
            <p>written exams: 4</p>
        </div>   
    </div>
    <br>
    <div class="cards">
        <div class="card">
            <h3>Scores</h3>
            <p>Your average score is 85%.</p>
        </div>
    </div>

</section>
<section class="section">
    <h2>File Upload & Download</h2>

    
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="labfile" required>
        <button type="submit" name="upload" class="btn">Upload</button>
    </form>
    <?php

        if(isset($_POST['upload'])){

            $fileName = $_FILES['labfile']['name'];
            $tempName = $_FILES['labfile']['tmp_name'];

            $target = "uploads/" . $fileName;

            if(move_uploaded_file($tempName, $target)){
                echo "<p style='color:green;'>File Uploaded Successfully!</p>";
                echo "<a href='uploads/$fileName' download>Download File</a>";
            } else {
                echo "<p style='color:red;'>Upload Failed!</p>";
            }
        }


    ?>
<br><br>

    <a href="filesdetails.php" >View File Details</a>
</section>

</body>
</html>