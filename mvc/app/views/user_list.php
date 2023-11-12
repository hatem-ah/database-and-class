<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>User List</h1>

    <ul>
        <?php foreach ($users as $user) { ?>
            <li><?= $user["email"] ?>
            <li><?= $user["password"]  ?>
            <li><?= $user["type"] ?>
            <?php
            echo "<br>";?>
                <a href=" editForm?id=<?php echo $user['id']; ?>">Edit</a>
                <?php echo ","; ?>
                <a href="index.php/delete?id=<?php echo $users['id']; ?>">Delete</a>
            </li>
        <?php } ?>
    </ul>
    <a href="addForm">add new user</a>
</body>

</html>