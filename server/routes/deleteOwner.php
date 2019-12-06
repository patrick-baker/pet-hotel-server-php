<?php

// imports $dbconn which is the database connection
require '../../config.php';

// accesses id url parameter to choose which row to delete
$where_condition = array(
     "id" => $_GET['id']
);

// runs delete at table "pets" with above condition
$result = pg_delete($dbconn, 'owners', $where_condition);

if (!$result) {
    echo "An error occurred.\n";
    echo pg_last_error($dbconn);
    exit;
} else {
    echo"Data is deleted: $result";
}

?>