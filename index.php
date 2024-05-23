<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="email"> Email:</label>
        <input type="mail" name="email" id="email">
        <button type="submit">submit</button>
    </form>
    <?php 
    var_dump($_POST);
    ?>
</body>
</html>