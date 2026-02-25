<?php
require 'vendor/autoload.php';

try {
    $client = new MongoDB\Client("mongodb://localhost:27017");
    echo "Connected to MongoDB";
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
