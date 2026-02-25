<?php
require_once __DIR__ . '/../config/mongodb.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$usersCollection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectId($id)],
    ['$set' => ['name' => $name, 'email' => $email]]
);

echo "User Updated ✅ <br><a href='../users_mongo.php'>Go Back</a>";