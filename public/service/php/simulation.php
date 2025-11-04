<!DOCTYPE html>
<html>
<head>
    <title>Simulation Basic Data</title>
</head>
<body>
     <img src="../service/logos/makeen_logo.png" alt="MAKEEN ENERGY LOGO"
    width="350" 
    height="100"> 
    <p></p>
    <p></p>
    </body>
</html>

<?php
include __DIR__ . "/../connector/connection.php";

// Connect to PostgreSQL
$conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Database connection failed: " . pg_last_error());
}

$page1 = '/../service/index.html';

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
    //echo '<a href="cyl_add.html">Add Another LPG Cylinder</a><br>';
    //echo '<a href="cyl_list.php">View All LPG Cylinders</a>';
    die() ;
} else {
    //header('Location: '.$page1) ;
    echo "❌ Error: " . pg_last_error($conn);
   die() ;
    
}
pg_close($conn);
?>