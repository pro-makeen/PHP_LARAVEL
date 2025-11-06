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

use Illuminate\Support\Facades\DB;
 
DB::insert('insert into me_users (country, production, hours, gas_cylidner, man_power, service_team, price_gas, profit_gas, device) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [$country, $production, $hours; $gas_cylidner; $man_power, $service_team, $price_gas, $profit_gas, $device]);

?>