<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Online Examination System</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

</head>

<body>

<header class="header">
    <h1>Online Examination System</h1>
    <p>Smart • Secure • Simple</p>
</header>
 
<nav class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#features">Features</a>
    <a href="#login">Login</a>
    
</nav>

<section id="home" class="main">
    <h2>Welcome to Online Exams</h2>
    <p>Attend exams anytime, anywhere with complete security.</p><br>
    <a href="#login">
    <button class="btn">Exam Information</button> </a>
</section>

<div class="video-login-container">

   
    <video class="video" autoplay muted loop id="examVideo">
        <source src="onlineexamvideo.mp4" type="video/mp4">
    </video>

    
    <section id="login" class="section login-side">
        <h2>Student Login</h2>
        <label>If not registered? <a href="signup.php">sign up</a></label><br><br>

        <form class="login-form" action="php/loginprocess.php" onsubmit="return validateLogin()" method="POST">

            <input type="email"  id="loginemail" name="email" placeholder="Email" required>
            <input type="password" id="loginpass"name="pass" placeholder="Password" required>
            <input type="submit" class="btn" value="Login" >

            <br>
            <a href="google-login.php" class="btn">Login with Google</a>

        </form>

    </section>

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

<audio class="audio" controls autoplay muted >
    <source src="onlineexamaudio.mp3" type="audio/mp3">
</audio>


<section class="section" style="text-align: center;">
    <h2>Learning Resources</h2>
    <a href="learning.html" class="btn">Go to Learning Page</a>
</section>

    
        

</body>
</html>
