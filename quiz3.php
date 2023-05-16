<?php
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--linking css file -->
        <link rel="stylesheet" href="puzzle\Style\quiz3.css">
        <link rel="stylesheet" href="puzzle\Style\global.css">


        <!-- Font linking -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">


        <title>Third Clue</title>
        <noscript>Enable Java Script to view this page</noscript>
    </head>

    <body>
        <nav class="navbar">
            <h1 class="heading-primary">Quiz- <span>3</span> </h1>
        </nav>

        <div class="container">

            <div class="box">
                <p>This one is a bit technical question . You will need a smart phone here , Scan the QR code and get the question.</p>

                <span>
                    <p>Scan the given QR code:</p>
                </span>

                <div class="center">
                    <img src="puzzle\img\myqrcode.png" alt="loading...">
                </div>

                <div class="submit-section">
                    <div class="center">
                        <input type="text" id="inp" class="transparent" placeholder="Enter you answer here">
                        <button class="btn" >Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="puzzle\js\quiz3.js"></script>
    </body>
</html>