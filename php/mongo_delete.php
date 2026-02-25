<?php
require_once __DIR__ . '/../config/mongodb.php';

$id = $_GET['id'];

$usersCollection->deleteOne([
    '_id' => new MongoDB\BSON\ObjectId($id)
]);

echo "User Deleted ❌ <br><a href='../users_mongo.php'>Go Back</a>";