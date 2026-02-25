<?php
require_once __DIR__ . '/../vendor/autoload.php';

$env = parse_ini_file(__DIR__ . '/../.env');

$mongoUri = $env['MONGO_URI'] ?? 'mongodb://localhost:27017';
$mongoDb  = $env['MONGO_DB'] ?? 'online_exam';

$client = new MongoDB\Client($mongoUri);
$db = $client->selectDatabase($mongoDb);

$usersCollection = $db->users;
?>