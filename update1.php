<?php
// Assuming you have a database connection established
include("db.php");
include("auth_session.php");
include("describe.php");

    $cnt=10;
    $name = $_SESSION['username']; // Assuming you have the username stored in a session variable
    $sql = "UPDATE report SET quiz2 = '$cnt' WHERE Name = '$name'";
    
    // Execute the query
    if ($con->query($sql) === true) {
        echo "Max guesses stored successfully.";
    } else {
        echo "Error updating max guesses: " . $con->error;
    }

?>