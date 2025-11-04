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

if (!$conn) {
    die("Database connection failed: " . pg_last_error());
}

// Get POST data
$country = $_POST['country'];
$production = $_POST['production'];
$hours = $_POST['hours'];
$gas_cylidner = $_POST['gas_cylinder'];
$man_power = $_POST['man_power'];
$service_team = $_POST['service_team'];
$price_gas = $_POST['price_gas'];
$profit_gas = $_POST['profit_gas'];
$device = $_POST['device'];

// Insert data securely
$query = "INSERT INTO simulation_data (country, production, hours, gas_cylidner, man_power, service_team, price_gas, profit_gas, device) VALUES ($1, $2, $3, $4, $5, $6, $7, $8, $9)";
$result = pg_query_params($conn, $query, array($country, $production, $hours; $gas_cylidner; $man_power, $service_team, $price_gas, $profit_gas, $device));

if ($result) {
    echo "✅ Simulation submitted.<br><br>";

    die() ;
} else {
 
    echo "❌ Error: " . pg_last_error($conn);
   die() ;
    
}
pg_close($conn);

?>

</body>
</html>