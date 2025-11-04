<?php

$uri = "postgresql://root:ybIeaygTzEWTg0AJnZ3T1yYZeTGtODUK@dpg-d3ua6jjipnbc738q7g5g-a.frankfurt-postgres.render.com/me_users";

$fields = parse_url($uri);

// build the DSN including SSL settings
$conn = "pgsql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];;
$conn .= ";dbname=simulation_data";

$db = new PDO($conn, $fields["user"], $fields["pass"]);

?>