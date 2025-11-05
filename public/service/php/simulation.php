<?php

$db_handle = pg_connect("host=dpg-d3ua6jjipnbc738q7g5g-a.frankfurt-postgres.render.com dbname=me_users user=root password=ybIeaygTzEWTg0AJnZ3T1yYZeTGtODUK");

if ($db_handle) {
    

echo 'Connection attempt succeeded.'; 
$query = "SELECT * FROM lpg_cylinder_basic_data";
$result = pg_query($db_handle, $query);

pg_close($db_handle);

} else {

echo 'Connection attempt failed.';
pg_close($db_handle);

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teste</title>
</head>
<body>
    <h1>Teste</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Create Date</th>
            <th>Country</th>
           
        </tr>

        <?php
        if (pg_num_rows($result) > 0) {
            while ($row = pg_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['create_adte']}</td>
                        <td>{$row['country']}</td>
                    </tr>"
                    }
        } else {
            echo "<tr><td colspan='4'>No LPG cylinders found.</td></tr>";
        }

        pg_close($conn);
        ?>               
                    
 </table>
    <br>                 
     </body>
</html>



