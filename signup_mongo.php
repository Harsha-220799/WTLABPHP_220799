<!DOCTYPE html>
<html>
<head>
    <title>MongoDB Signup</title>
</head>
<body>

<h2>MongoDB Signup</h2>

<form action="php/mongo_signprocess.php" method="POST">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Signup (MongoDB)</button>
</form>

</body>
</html>