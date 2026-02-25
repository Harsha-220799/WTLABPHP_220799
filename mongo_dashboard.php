<?php
session_start();

if (!isset($_SESSION['mongo_user'])) {
    header("Location: login_mongo.php");
    exit();
}
?>

<h2>Welcome to MongoDB Dashboard</h2>

<p>Logged in as: <?php echo $_SESSION['mongo_user']; ?></p>

<a href="users_mongo.php">View All Users</a><br><br>

<a href="php/mongo_logout.php">Logout</a>