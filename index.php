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
        
        //second condition
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {        //use of propriety filter_var where the first item is the one needed to be filtered, and the second one is the filter
            echo "<p>Email valida: $email</p>";                 //adding of a HTML line
        } else {
            echo "<p>Email non valida.</p>";                    //adding of a HTML line
        }   
        
        // Debugging 
        var_dump($_POST);
    }
    ?>
</body>
</html>