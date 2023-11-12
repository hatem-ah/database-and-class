<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="../../index.php?id=<?php echo $_GET["id"]; ?>&action=delete">

        <label for="delete">are you sure you want to delete this user?</label>
        <br>
        <input type="submit" value="yes" name="submit">
    </form>
</body>

</html>