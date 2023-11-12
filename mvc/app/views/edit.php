<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="edit?id=<?php echo $_GET["id"]; ?>">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <label for="type">Type:</label>
        <input type="text" name="type" id="type">
        <br>
        <input type="submit" value="Update" name="submit">
    </form>
</body>

</html>