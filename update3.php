<?php
// Assuming you have a database connection established
include("db.php");
include("auth_session.php");
include("numberguess.php");



if (isset($_POST['cnt'])) {
    $completedin = $_POST['completedin'];
    echo $completedin;
   /* echo "Name: " . $name . "<br>";
echo "Max Guesses: " . $maxGuesses . "<br>";*/
    // Perform the database update query
    $name = $_SESSION['username']; // Assuming you have the username stored in a session variable
    $sql = "UPDATE report SET quiz4 = '$completedin' WHERE Name = '$name'";
    
    // Execute the query
    if ($con->query($sql) === true) {
        echo "Max guesses stored successfully.";
    } else {
        echo "Error updating max guesses: " . $con->error;
    }
} else {
    echo "Max guesses value not received.";
}





?>
