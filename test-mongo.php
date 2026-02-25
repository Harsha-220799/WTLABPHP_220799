<?php
require_once 'config/mongodb.php';

$result = $usersCollection->insertOne([
    'name' => 'Test User',
    'email' => 'test@example.com',
    'password' => password_hash('123456', PASSWORD_DEFAULT)
]);

if ($result->getInsertedCount() > 0) {
    echo "MongoDB Connected & Insert Working ✅";
} else {
    echo "Insert failed ❌";
}
?>