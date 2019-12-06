<?php

require '../../config.php';

$where_condition = array(
     "id" => $_GET['id']
);

$data = array(
     "petname" => $_GET['petname']
);

$result = pg_update($dbconn, 'pets', $data, $where_condition);

if (!$result) {
    echo "An error occurred.\n";
    echo pg_last_error($dbconn);
    exit;
} else {
    echo"Data is updated: $result";
}

?>