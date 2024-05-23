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
   
    

    // first condition
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {         //=====> checks if request is made
        $email = $_POST['email'];                       //======> assigns variable email to the value received



    //inclusion of function.php    
    include 'function.php';     
    validate_email($email);                             //call to function
        
        // Debugging 
        var_dump($_POST);
    }
    ?>
</body>
</html>