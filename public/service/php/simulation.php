<!DOCTYPE html>
<html>
<head>
    <title>MAKEEN Energy</title>
</head>
<body>
    <p></p>
    <p></p>
    </body>
</html>

<?php

$db_handle = pg_connect("host=dpg-d3ua6jjipnbc738q7g5g-a.frankfurt-postgres.render.com dbname=me_users user=root password=ybIeaygTzEWTg0AJnZ3T1yYZeTGtODUK");

if ($db_handle) {

echo 'Connection attempt succeeded.';

} else {

echo 'Connection attempt failed.';

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
$result = pg_query_params($db_handle, $query, array($country, $production, $hours; $gas_cylidner; $man_power, $service_team, $price_gas, $profit_gas, $device));

if ($result) {
    echo "✅ Simulation submitted.<br><br>";

    die() ;
} else {
 
    echo "❌ Error: " . pg_last_error($conn);
   die() ;
    
}
pg_close($db_handle);

?>

