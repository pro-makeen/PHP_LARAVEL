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




    $result = pg_query($db_handle, "SELECT * FROM simulation_data");

echo 'Connection attempt succeeded.'; 
echo $result;

pg_close($db_handle);



} else {

echo 'Connection attempt failed.';
pg_close($db_handle);

}
?>

