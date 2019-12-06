<?php

require '../../config.php';

$where_condition = array(
     "id" => $_GET['id']
);

$result = pg_delete($dbconn, 'owners', $where_condition);

if (!$result) {
    echo "An error occurred.\n";
    echo pg_last_error($dbconn);
    exit;
} else {
    echo"Data is deleted: $result";
}

?>