<?php
session_start();

// Function to generate a random number between the given range
function generateRandomNumber($min, $max) {
    return rand($min, $max);
}

// Function to validate the user's guess
function validateGuess($guess, $randomNumber) {
    if ($guess == $randomNumber) {
        return "Congratulations! You guessed the correct number.";
    } elseif ($guess < $randomNumber) {
        return "Too low! Try guessing a higher number.";
    } else {
        return "Too high! Try guessing a lower number.";
    }
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $randomNumber = isset($_SESSION['randomNumber']) ? $_SESSION['randomNumber'] : generateRandomNumber(1, 100);
    $guess = $_POST['guess'];
    $guessCounter = isset($_SESSION['guessCounter']) ? $_SESSION['guessCounter'] : 0;

    $result = validateGuess($guess, $randomNumber);
    $_SESSION['randomNumber'] = $randomNumber;
    $_SESSION['guessCounter'] = ++$guessCounter;
	if ($result == "Congratulations! You guessed the correct number.") {
        header("Refresh: 3; URL=riddle.html");
        exit();
    }
} else {
    // Generate a random number and store it in the session
    $randomNumber = generateRandomNumber(1, 100);
    $_SESSION['randomNumber'] = $randomNumber;
    $_SESSION['guessCounter'] = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Number Guessing Game</title>
</head>
<body>
    <h1>Number Guessing Game</h1>
    <p>Guess a number between 1 and 100:</p>

    <form method="POST" action="">
        <input type="number" name="guess" required>
        <button type="submit">Guess</button>
    </form>

    <?php if (isset($result)) : ?>
        <p><?php echo $result; ?></p>
    <?php endif; ?>

    <p>Guesses made: <?php echo $_SESSION['guessCounter']; 
	$cnt=$_SESSION['guessCounter'];
	$name = $_SESSION['username']; // Assuming you have the username stored in a session variable
    $sql = "UPDATE report SET quiz3 = '$cnt' WHERE Name = '$name'";
	?></p>
</body>
</html>
