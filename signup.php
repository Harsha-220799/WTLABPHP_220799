<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>OnlineExamination|SignUp</title>
       
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

    <header  class="header">
        <h1>Online Examination System</h1>
        <p>Smart • Secure • Simple</p> 
    </header>
    <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="index.php.#login">Login</a>
            <a href="index.php.#about">About</a>
    </nav>

    <div class="section login-side ">
        <h2>Create Account</h2>
        <p>Please fill in the details to create your account</p><br>

        <form class="login-form" action="php/signprocess.php" method="POST">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="Full Name" required>
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" required>
            <label>Password</label>
            <input type="password" name="pass" placeholder="Password" required>
            <label>Confirm Password</label>
            <input type="password" name="cpass" placeholder="Confirm Password" required>
            <button type="submit" class="btn">Sign Up</button>
            <div >
                <p>Already have an account? <a href="index.html">Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>