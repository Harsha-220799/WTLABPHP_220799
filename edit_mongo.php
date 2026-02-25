<?php
require_once 'config/mongodb.php';

$id = $_GET['id'];

$user = $usersCollection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
?>

<h2>Update User</h2>

<form action="php/mongo_update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $user['_id']; ?>">

    Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br><br>
    Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>

    <button type="submit">Update</button>
</form>