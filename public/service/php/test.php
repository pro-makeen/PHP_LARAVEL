<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <title>MAKEEN Energy</title>
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
echo "PHP folder found!";

$db_handle = pg_connect("host=dpg-d3ua6jjipnbc738q7g5g-a.frankfurt-postgres.render.com dbname=me_users user=root password=ybIeaygTzEWTg0AJnZ3T1yYZeTGtODUK");

if ($db_handle) {

echo 'Connection attempt succeeded.';

} else {

echo 'Connection attempt failed.';

}

pg_close($db_handle);

?> 

</body>
</html>