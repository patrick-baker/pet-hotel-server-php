<?php

require '../../config.php';


$result = pg_query($dbconn, "SELECT * FROM pets");
if (!$result) {
    echo "An error occurred.\n";
    exit;
}

$array = pg_fetch_all($result);
echo json_encode($array)."\n";

?>