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

?>