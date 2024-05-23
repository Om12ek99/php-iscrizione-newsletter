<?php
function validate_email($email) {
 //second condition
 if (filter_var($email, FILTER_VALIDATE_EMAIL)) {       //use of propriety filter_var where the first item is the one needed to be filtered, and the second one is the filter
    echo "<p class='alert alert-success' >Email valida: $email</p>";                 //adding of a HTML line
} else {
    echo "<p class='alert alert-danger' >Email non valida.</p>";                    //adding of a HTML line
}   
}
?>