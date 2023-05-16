<?php
//require('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Puzzle-4</title>
    <link rel="stylesheet" href="puzzle\Style\describe.css">
</head>
<body>

        <div class="app_container">
            <img src="puzzle\img\tree.jpg" alt="slide images" class="image" id="image">
            <div class="buttons">
                
                <form method="POST" action="">
        <label for="inputId">Text Input:</label>
        <input type="text" name="inputName" id="inputId" required>
        <button type="button" id="submitButton">Submit</button>
    </form>

    <script>
        let count=0;
        document.getElementById("submitButton").addEventListener("click", function() {
            var inputVal = document.getElementById('inputId').value;
           // alert("Input value: " + inputVal);
            if(inputVal=='tree')
            {
                alert("Winn!!!!");
                count=10;
                window.location.href = 'numberguess.php';
                storeMaxGuesses(count);
            }
            else
            {
                alert("Losses!!!");
                window.location.href = 'numberguess.php';
            }
        });

        function storeMaxGuesses(count) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "update1.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };
            const data = "Count=" + encodeURIComponent(count);
            xhr.send(data);
        }
    </script>
            </div>
        </div>
</body>
</html>