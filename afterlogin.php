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
   
    <title>Online Examination System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="header">
    <h1>Online Examination System</h1>
    <p>Smart • Secure • Simple</p>
</header>
 
<nav class="navbar">
    <a href="index.php.#home">Home</a>
    <a href="#about">About</a>
    <a href="#features">Features</a>
    <a href="profile.php">Profile</a>
    
</nav>

<section id="home" class="main">
    <h2>Welcome to Online Exams</h2>
    <p>Attend exams anytime, anywhere with complete security.</p><br>
    <a href="exam-info.html">
    <button class="btn">Exam Information</button> </a>
</section>

<div class="video-login-container">

   
    <video class="video" autoplay muted loop id="examVideo">
        <source src="onlineexamvideo.mp4" type="video/mp4">
    </video>    

</div>


<section id="about" class="section">
    <h2>About System</h2>
    <p>
         The Online Examination System is a web-based platform that allows students
        to take exams digitally, reducing paperwork and increasing efficiency.
    </p><br> 
    <p>
        Here u can write a simple exams on subjects(like html,python,c etc..) and evaluate ur performance instantly.
    </p>
</section>

<section id="features" class="section">
    <h2>Key Features</h2>
    <div class="cards">
        <div class="card">Secure Login</div>
        <div class="card">Timed Exams</div>
        <div class="card">Auto Evaluation</div>
        <div class="card">Instant Results</div>
    </div>
</section>






    
<section class="section" style="text-align: center;">
    <h2>Learning Resources</h2>
    <a href="learning.html" class="btn">Go to Learning Page</a>
</section>

    
        

</body>
</html>