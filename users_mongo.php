<?php
require_once 'config/mongodb.php';

$users = $usersCollection->find();
?>

<h2>MongoDB Users List</h2>

<table border="1" cellpadding="10">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Actions</th>
</tr>

<?php foreach ($users as $user): ?>
<tr>
    <td><?php echo $user['name']; ?></td>
    <td><?php echo $user['email']; ?></td>
    <td>
        <a href="edit_mongo.php?id=<?php echo $user['_id']; ?>">Edit</a> |
        <a href="php/mongo_delete.php?id=<?php echo $user['_id']; ?>">Delete</a>
    </td>
</tr>
<?php endforeach; ?>

</table>