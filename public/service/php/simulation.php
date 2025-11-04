<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <title>MAKEEN Energy - Simulator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #qr-reader {
            width: 100%;
            max-width: 600px;
            margin: auto;
        }
        @media (max-width: 600px) {
            #qr-reader {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<h1>MAKEEN Energy Results</h1>


<?php

include __DIR__ . "../service/php/connection.php";

// Connect to PostgreSQL
$conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");


?>

</body>
</html>