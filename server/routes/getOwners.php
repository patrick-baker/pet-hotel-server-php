<?php

// imports $dbconn which is the database connection
require '../../config.php';



// does sql query (get owners)
$result = pg_query($dbconn, "SELECT * FROM owners");
if (!$result) {
    echo "An error occurred.\n";
    exit;
}

// makes response json
$array = pg_fetch_all($result);
echo json_encode($array)."\n";

?>